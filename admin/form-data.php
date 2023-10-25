<?php include "header.php";
session_start();
if ($_SESSION['user_role'] == 0) {
    echo ("<script>window.location.href='$hostname/form.php'</script>");    
}
?>
<div id="admin-content">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h1 class="admin-heading">Report</h1>
            </div>
            <div class="col-md-2">
                <a class="add-new" style="background-color: #1D6F42; color:#fff;" href="excel-export.php">Excel</a>
            </div>
            <div class="col-md-12">
                <table class="content-table">
                    <thead>
                        <th>S.No.</th>
                        <th>PDF</th>
                        <th>विजिट सेंटर /सब सेंटर/ पॉइंट</th>
                        <th>विजिट करने वाले फंक्शनरी का नाम</th>
                        <th>मोबा./व्हाट्सएप नंबर</th>
                        <th>विजिट का दिनाँक</th>
                        <th>पहुंचने का समय</th>
                        <th>सत्संग घर पहुंचने पर ट्रैफिक व्यवस्था कैसी थी</th>
                        <th>पार्किंग व्यवस्था कैसी थी</th>
                        <th>एंट्री प्वाइंट पर सिक्योरिटी व्यवस्था कैसी थी</th>
                        <th>सत्संग ग्राउंड की साफ-सफाई मेंटेनेंस व्यवस्था पर विस्तृत जानकारी</th>
                        <th>संगत कहां-कहां से आ रही है?</th>
                        <th>संगत किन-किन साधनों से आ रही है,उनका उल्लेख,वह वैधानिक साधन का उपयोग कर रहे हैं अथवा नहीं, वाहन के सभी दस्तावेज पूर्ण है अथवा नहीं, वाहन की फिटनेस बराबर है अथवा नहीं (यह चेक किया गया है अथवा नहीं)</th>
                        <th>सत्संग घर में आने वाली संगत जी स्थान से आ रही है (उनकी सत्संग घर से दूरी का उल्लेख करें)</th>
                        <th>पंडाल में सत्संग के बैठने की व्यवस्था</th>
                        <th>प्रवेश से लेकर संगत के जाने तक गाइड लाइन का पालन हो रहा है अथवा नहीं</th>
                        <th>सेवादार कितने हैं? सभी सप्ताह के अन्य दिनों में भी सेवा देते हैं ?</th>
                        <th>सूचनाओं का अनाउंसमेंट प्रोपर हो रहा है ?</th>
                        <th>संगत के साथ फंक्शनरीज का सतत संपर्क हो रहा है अथवा नहीं ?</th>
                        <th>Ex फंक्शनरी का सेवा में योगदान है अथवा नहीं ?</th>
                        <th>पीने के पानी की व्यवस्था क्या है और टंकी की सफाई कब हुई थी ?</th>
                        <th>पाठी की स्वीकृत संख्या ?</th>
                        <th>उपलब्ध पाठी की संख्या ?</th>
                        <th>साउंड की क्वालिटी कैसी थी ?</th>
                        <th>सत्संग किसका था ?</th>
                        <th>सत्संग की क्वालिटी कैसी थी ?</th>
                        <th>स्टेज के नीचे पाठ किसका था और क्वालिटी कैसी थी ?</th>
                        <th>संगत की संख्या बढ़ी या घटी? घटी तो बढ़ाने के क्या प्रयास हो रहे हैं ?</th>
                        <th>सभी दस्तावेजों को सेक्रेटरी जबलपुर II महाराजपुर की ओर से हस्ताक्षर करना, दिनांक के साथ</th>
                        <th>गाइड लाइन के अनुसार सत्संग घर में मेंटेन किया जाने 21 रजिस्टर और 22 फ़ाइल, अद्यतन खसरा व अन्य राजस्व रिकार्ड को देखा गया अथवा नहीं, इनके संधारण के संबंध में विजिटर फंक्शनरी का प्रतिवेदन</th>
                        <th>अन्य कोई रिमार्क</th>
                        <!-- <th>Edit</th> -->
                        <th>Delete</th>
                    </thead>
                    <tbody>
                        <!-- PHP CODE -->
                        <?php
                        include("config.php");
                        if (isset($_GET['page_num_index'])) {
                            $page_num_index_by_addbar = $_GET['page_num_index'];
                        } else {
                            $page_num_index_by_addbar = 1;
                        }
                        $serial_num = 0;
                        $sql_show_user = "SELECT * FROM form_data ORDER BY form_id DESC";
                        $result_sql_show_user = mysqli_query($conn, $sql_show_user) or die("Query Failed!!");
                        if (mysqli_num_rows($result_sql_show_user) > 0) {
                            $serial_num++;
                            while ($row = mysqli_fetch_assoc($result_sql_show_user)) {
                        ?>
                                <tr>
                                    <td class='id'>
                                        <?php echo ($serial_num); ?>
                                    </td>
                                    <td><a href='pdf.php?fid=<?php echo ($row["form_id"]) ?>'>PDF</a></td>
                                    <td><?php echo ($row['f_1']) ?></td>
                                    <td><?php echo ($row['f_2']) ?></td>
                                    <td><?php echo ($row['f_phone']) ?></td>
                                    <td><?php echo ($row['f_3']) ?></td>
                                    <td><?php echo ($row['f_4']) ?></td>
                                    <td><?php echo ($row['f_5']) ?></td>
                                    <td><?php echo ($row['f_6']) ?></td>
                                    <td><?php echo ($row['f_7']) ?></td>
                                    <td><?php echo ($row['f_8']) ?></td>
                                    <td><?php echo ($row['f_9']) ?></td>
                                    <td><?php echo ($row['f_10']) ?></td>
                                    <td><?php echo ($row['f_11']) ?></td>
                                    <td><?php echo ($row['f_12']) ?></td>
                                    <td><?php echo ($row['f_13']) ?></td>
                                    <td><?php echo ($row['f_14']) ?></td>
                                    <td><?php echo ($row['f_15']) ?></td>
                                    <td><?php echo ($row['f_16']) ?></td>
                                    <td><?php echo ($row['f_17']) ?></td>
                                    <td><?php echo ($row['f_18']) ?></td>
                                    <td><?php echo ($row['f_19']) ?></td>
                                    <td><?php echo ($row['f_20']) ?></td>
                                    <td><?php echo ($row['f_21']) ?></td>
                                    <td><?php echo ($row['f_22']) ?></td>
                                    <td><?php echo ($row['f_23']) ?></td>
                                    <td><?php echo ($row['f_24']) ?></td>
                                    <td><?php echo ($row['f_25']) ?></td>
                                    <td><?php echo ($row['f_26']) ?></td>
                                    <td><?php echo ($row['f_27']) ?></td>
                                    <td><?php echo ($row['f_28']) ?></td>
                                    <!-- <td class='edit'><a href='update-user.php?id=<php echo ($row["from_id"]) ?>'><i
                                                class='fa fa-edit'></i></a></td> -->
                                    <td class='delete'><a href='delete-from-data.php?id=<?php echo ($row["form_id"]) ?>'><i class='fa fa-trash'></i></a></td>
                                </tr>
                        <?php $serial_num++;
                            }
                        } ?>
                        <!-- PHP CODE -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>