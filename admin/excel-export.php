<?php
//export.php  
include('config.php');
$output = '';
$query = "SELECT * FROM form_data ORDER BY form_id DESC";
$result = mysqli_query($conn, $query);
$serial_num = 1;
if (mysqli_num_rows($result) > 0) {
    $output .= '
   <table class="table" bordered="1" style="border:2px solid black; border-collapse: collapse;">  
                    <tr style="border:2px solid black; border-collapse: collapse; background-color:#0E2954; color:#fff; text-align:center;">  
                    <th style="border:2px solid black; border-collapse: collapse;">S.No.</th>
                    <th style="border:2px solid black;">Filled By</th>
                    <th style="border:2px solid black; border-collapse: collapse;">Filled Date</th>
                    <th style="border:2px solid black; border-collapse: collapse;">विजिट सेंटर /सब सेंटर/ पॉइंट</th>
                    <th style="border:2px solid black; border-collapse: collapse;">विजिट करने वाले फंक्शनरी का नाम</th>
                    <th style="border:2px solid black; border-collapse: collapse;">मोबा./व्हाट्सएप नंबर</th>
                    <th style="border:2px solid black; border-collapse: collapse;">विजिट का दिनाँक</th>
                    <th style="border:2px solid black; border-collapse: collapse;">पहुंचने का समय</th>
                    <th style="border:2px solid black; border-collapse: collapse;">सत्संग घर पहुंचने पर ट्रैफिक व्यवस्था कैसी थी</th>
                    <th style="border:2px solid black; border-collapse: collapse;">पार्किंग व्यवस्था कैसी थी</th>
                    <th style="border:2px solid black; border-collapse: collapse;">एंट्री प्वाइंट पर सिक्योरिटी व्यवस्था कैसी थी</th>
                    <th style="border:2px solid black; border-collapse: collapse;">सत्संग ग्राउंड की साफ-सफाई मेंटेनेंस व्यवस्था पर विस्तृत जानकारी</th>
                    <th style="border:2px solid black; border-collapse: collapse;">संगत कहां-कहां से आ रही है?</th>
                    <th style="border:2px solid black; border-collapse: collapse;">संगत किन-किन साधनों से आ रही है,उनका उल्लेख,वह वैधानिक साधन का उपयोग कर रहे हैं अथवा नहीं, वाहन के सभी दस्तावेज पूर्ण है अथवा नहीं, वाहन की फिटनेस बराबर है अथवा नहीं (यह चेक किया गया है अथवा नहीं)</th>
                    <th style="border:2px solid black; border-collapse: collapse;">सत्संग घर में आने वाली संगत जी स्थान से आ रही है (उनकी सत्संग घर से दूरी का उल्लेख करें)</th>
                    <th style="border:2px solid black; border-collapse: collapse;">पंडाल में सत्संग के बैठने की व्यवस्था</th>
                    <th style="border:2px solid black; border-collapse: collapse;">प्रवेश से लेकर संगत के जाने तक गाइड लाइन का पालन हो रहा है अथवा नहीं</th>
                    <th style="border:2px solid black; border-collapse: collapse;">सेवादार कितने हैं? सभी सप्ताह के अन्य दिनों में भी सेवा देते हैं ?</th>
                    <th style="border:2px solid black; border-collapse: collapse;">सूचनाओं का अनाउंसमेंट प्रोपर हो रहा है ?</th>
                    <th style="border:2px solid black; border-collapse: collapse;">संगत के साथ फंक्शनरीज का सतत संपर्क हो रहा है अथवा नहीं ?</th>
                    <th style="border:2px solid black; border-collapse: collapse;">Ex फंक्शनरी का सेवा में योगदान है अथवा नहीं ?</th>
                    <th style="border:2px solid black; border-collapse: collapse;">पीने के पानी की व्यवस्था क्या है और टंकी की सफाई कब हुई थी ?</th>
                    <th style="border:2px solid black; border-collapse: collapse;">पाठी की स्वीकृत संख्या ?</th>
                    <th style="border:2px solid black; border-collapse: collapse;">उपलब्ध पाठी की संख्या ?</th>
                    <th style="border:2px solid black; border-collapse: collapse;">साउंड की क्वालिटी कैसी थी ?</th>
                    <th style="border:2px solid black; border-collapse: collapse;">सत्संग किसका था ?</th>
                    <th style="border:2px solid black; border-collapse: collapse;">सत्संग की क्वालिटी कैसी थी ?</th>
                    <th style="border:2px solid black; border-collapse: collapse;">स्टेज के नीचे पाठ किसका था और क्वालिटी कैसी थी ?</th>
                    <th style="border:2px solid black; border-collapse: collapse;">संगत की संख्या बढ़ी या घटी? घटी तो बढ़ाने के क्या प्रयास हो रहे हैं ?</th>
                    <th style="border:2px solid black; border-collapse: collapse;">सभी दस्तावेजों को सेक्रेटरी जबलपुर II महाराजपुर की ओर से हस्ताक्षर करना, दिनांक के साथ</th>
                    <th style="border:2px solid black; border-collapse: collapse;">गाइड लाइन के अनुसार सत्संग घर में मेंटेन किया जाने 21 रजिस्टर और 22 फ़ाइल, अद्यतन खसरा व अन्य राजस्व रिकार्ड को देखा गया अथवा नहीं, इनके संधारण के संबंध में विजिटर फंक्शनरी का प्रतिवेदन</th>
                    <th style="border:2px solid black; border-collapse: collapse;">अन्य कोई रिमार्क</th>
                    </tr>
  ';
    while ($row = mysqli_fetch_array($result)) {
        $output .= '
                      <tr style="border:2px solid black; border-collapse: collapse; text-align:center;">  
                         <td style="border:2px solid black; border-collapse: collapse;">' . $serial_num . '</td>  
                         <td style="border:2px solid black; border-collapse: collapse;">' . $row["user"] . '</td>  
                         <td style="border:2px solid black; border-collapse: collapse;">' . $row["f_date"] . '</td>  
                         <td style="border:2px solid black; border-collapse: collapse;">' . $row["f_1"] . '</td>  
                         <td style="border:2px solid black; border-collapse: collapse;">' . $row["f_2"] . '</td>  
                        <td style="border:2px solid black; border-collapse: collapse;">' . $row["f_phone"] . '</td>  
                        <td style="border:2px solid black; border-collapse: collapse;">' . $row["f_3"] . '</td>
                        <td style="border:2px solid black; border-collapse: collapse;">' . $row["f_4"] . '</td>
                        <td style="border:2px solid black; border-collapse: collapse;">' . $row["f_5"] . '</td>
                        <td style="border:2px solid black; border-collapse: collapse;">' . $row["f_6"] . '</td>
                        <td style="border:2px solid black; border-collapse: collapse;">' . $row["f_7"] . '</td>
                        <td style="border:2px solid black; border-collapse: collapse;">' . $row["f_8"] . '</td>
                        <td style="border:2px solid black; border-collapse: collapse;">' . $row["f_9"] . '</td>
                        <td style="border:2px solid black; border-collapse: collapse;">' . $row["f_10"] . '</td>
                        <td style="border:2px solid black; border-collapse: collapse;">' . $row["f_11"] . '</td>
                        <td style="border:2px solid black; border-collapse: collapse;">' . $row["f_12"] . '</td>
                        <td style="border:2px solid black; border-collapse: collapse;">' . $row["f_13"] . '</td>
                        <td style="border:2px solid black; border-collapse: collapse;">' . $row["f_14"] . '</td>
                        <td style="border:2px solid black; border-collapse: collapse;">' . $row["f_15"] . '</td>
                        <td style="border:2px solid black; border-collapse: collapse;">' . $row["f_16"] . '</td>
                        <td style="border:2px solid black; border-collapse: collapse;">' . $row["f_17"] . '</td>
                        <td style="border:2px solid black; border-collapse: collapse;">' . $row["f_18"] . '</td>
                        <td style="border:2px solid black; border-collapse: collapse;">' . $row["f_19"] . '</td>
                        <td style="border:2px solid black; border-collapse: collapse;">' . $row["f_20"] . '</td>
                        <td style="border:2px solid black; border-collapse: collapse;">' . $row["f_21"] . '</td>
                        <td style="border:2px solid black; border-collapse: collapse;">' . $row["f_22"] . '</td>
                        <td style="border:2px solid black; border-collapse: collapse;">' . $row["f_23"] . '</td>
                        <td style="border:2px solid black; border-collapse: collapse;">' . $row["f_24"] . '</td>
                        <td style="border:2px solid black; border-collapse: collapse;">' . $row["f_25"] . '</td>
                        <td style="border:2px solid black; border-collapse: collapse;">' . $row["f_26"] . '</td>
                        <td style="border:2px solid black; border-collapse: collapse;">' . $row["f_27"] . '</td>
                        <td style="border:2px solid black; border-collapse: collapse;">' . $row["f_28"] . '</td>
                    </tr style="border:2px solid black; border-collapse: collapse;">
   ';
        $serial_num++;
    }
    $output .= '</table>';
    header('Content-Type: application/xls');
    header('Content-Disposition: attachment; filename=ReportDownload.xls');
    echo $output;
}
