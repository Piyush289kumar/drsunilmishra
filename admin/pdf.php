<?php
$form_id = $_GET['fid'];
//include library
include('../TCPDF-main/tcpdf.php');
//make TCPDF object
$pdf = new TCPDF('P', 'mm', 'A4');
//remove default header and footer
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
//add page
$pdf->AddPage();
//add content (student list)
//title
$pdf->SetFont('freesans', 'B', 14);
$pdf->Cell(190, 10, "--- Radha Soami Satsang Beas | Report ---", 0, 1, 'C');
$pdf->SetFont('freesans', '', 12);
include("config.php");
$sql = "SELECT * FROM form_data WHERE form_id = '{$form_id}'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
   
    while ($row = mysqli_fetch_array($result)) {
        $pdf->MultiCell(195, 10, "Filled By - ", 1, 'L');
        $pdf->MultiCell(195, 10, "{$row['user']}", 1, 'L');
        $pdf->MultiCell(195, 10, "1. विजिट सेंटर /सब सेंटर/ पॉइंट", 1, 'L');
        $pdf->MultiCell(195, 10, "{$row['f_1']}", 1, 'L');
        $pdf->MultiCell(195, 10, "2. विजिट करने वाले फंक्शनरी का नाम", 1, 'L');
        $pdf->MultiCell(195, 10, "{$row['f_2']}", 1, 'L');
        $pdf->MultiCell(195, 10, "मोबा./व्हाट्सएप नंबर", 1, 'L');
        $pdf->MultiCell(195, 10, "{$row['f_phone']}", 1, 'L');
        $pdf->MultiCell(195, 10, "3. विजिट का दिनाँक", 1, 'L');
        $pdf->MultiCell(195, 10, "{$row['f_3']}", 1, 'L');
        $pdf->MultiCell(195, 10, "4. पहुंचने का समय", 1, 'L');
        $pdf->MultiCell(195, 10, "{$row['f_4']}", 1, 'L');
        $pdf->MultiCell(195, 10, "5. सत्संग घर पहुंचने पर ट्रैफिक व्यवस्था कैसी थी", 1, 'L');
        $pdf->MultiCell(195, 10, "{$row['f_5']}", 1, 'L');
        $pdf->MultiCell(195, 10, "6. पार्किंग व्यवस्था कैसी थी", 1, 'L');
        $pdf->MultiCell(195, 10, "{$row['f_6']}", 1, 'L');
        $pdf->MultiCell(195, 10, "7. एंट्री प्वाइंट पर सिक्योरिटी व्यवस्था कैसी थी", 1, 'L');
        $pdf->MultiCell(195, 10, "{$row['f_7']}", 1, 'L');
        $pdf->MultiCell(195, 10, "8. सत्संग ग्राउंड की साफ-सफाई मेंटेनेंस व्यवस्था पर विस्तृत जानकारी", 1, 'L');
        $pdf->MultiCell(195, 10, "{$row['f_8']}", 1, 'L');
        $pdf->MultiCell(195, 10, "9. संगत कहां-कहां से आ रही है?", 1, 'L');
        $pdf->MultiCell(195, 10, "{$row['f_9']}", 1, 'L');
        $pdf->MultiCell(195, 10, "10. संगत किन-किन साधनों से आ रही है,उनका उल्लेख,वह वैधानिक साधन का उपयोग कर रहे हैं अथवा नहीं, वाहन के सभी दस्तावेज पूर्ण है अथवा नहीं, वाहन की फिटनेस बराबर है अथवा नहीं (यह चेक किया गया है अथवा नहीं)", 1, 'L');
        $pdf->MultiCell(195, 10, "{$row['f_10']}", 1, 'L');
        $pdf->MultiCell(195, 10, "11. सत्संग घर में आने वाली संगत जी स्थान से आ रही है (उनकी सत्संग घर से दूरी का उल्लेख करें)", 1, 'L');
        $pdf->MultiCell(195, 10, "{$row['f_11']}", 1, 'L');
        $pdf->MultiCell(195, 10, "12. पंडाल में सत्संग के बैठने की व्यवस्था", 1, 'L');
        $pdf->MultiCell(195, 10, "{$row['f_12']}", 1, 'L');
        $pdf->MultiCell(195, 10, "13. प्रवेश से लेकर संगत के जाने तक गाइड लाइन का पालन हो रहा है अथवा नहीं", 1, 'L');
        $pdf->MultiCell(195, 10, "{$row['f_13']}", 1, 'L');
        $pdf->MultiCell(195, 10, "14. सेवादार कितने हैं? सभी सप्ताह के अन्य दिनों में भी सेवा देते हैं ?", 1, 'L');
        $pdf->MultiCell(195, 10, "{$row['f_14']}", 1, 'L');
        $pdf->MultiCell(195, 10, "15. सूचनाओं का अनाउंसमेंट प्रोपर हो रहा है ?", 1, 'L');
        $pdf->MultiCell(195, 10, "{$row['f_15']}", 1, 'L');
        $pdf->MultiCell(195, 10, "16. संगत के साथ फंक्शनरीज का सतत संपर्क हो रहा है अथवा नहीं ?", 1, 'L');
        $pdf->MultiCell(195, 10, "{$row['f_16']}", 1, 'L');
        $pdf->MultiCell(195, 10, "17. Ex फंक्शनरी का सेवा में योगदान है अथवा नहीं ?", 1, 'L');
        $pdf->MultiCell(195, 10, "{$row['f_17']}", 1, 'L');
        $pdf->MultiCell(195, 10, "18. पीने के पानी की व्यवस्था क्या है और टंकी की सफाई कब हुई थी ?", 1, 'L');
        $pdf->MultiCell(195, 10, "{$row['f_18']}", 1, 'L');
        $pdf->MultiCell(195, 10, "19. पाठी की स्वीकृत संख्या ?", 1, 'L');
        $pdf->MultiCell(195, 10, "{$row['f_19']}", 1, 'L');
        $pdf->MultiCell(195, 10, "20. उपलब्ध पाठी की संख्या ?", 1, 'L');
        $pdf->MultiCell(195, 10, "{$row['f_20']}", 1, 'L');
        $pdf->MultiCell(195, 10, "21. साउंड की क्वालिटी कैसी थी ?", 1, 'L');
        $pdf->MultiCell(195, 10, "{$row['f_21']}", 1, 'L');
        $pdf->MultiCell(195, 10, "22. सत्संग किसका था ?", 1, 'L');
        $pdf->MultiCell(195, 10, "{$row['f_22']}", 1, 'L');
        $pdf->MultiCell(195, 10, "23. सत्संग की क्वालिटी कैसी थी ?", 1, 'L');
        $pdf->MultiCell(195, 10, "{$row['f_23']}", 1, 'L');
        $pdf->MultiCell(195, 10, "24. स्टेज के नीचे पाठ किसका था और क्वालिटी कैसी थी ?", 1, 'L');
        $pdf->MultiCell(195, 10, "{$row['f_24']}", 1, 'L');
        $pdf->MultiCell(195, 10, "25. संगत की संख्या बढ़ी या घटी? घटी तो बढ़ाने के क्या प्रयास हो रहे हैं ?", 1, 'L');
        $pdf->MultiCell(195, 10, "{$row['f_25']}", 1, 'L');
        $pdf->MultiCell(195, 10, "26. सभी दस्तावेजों को सेक्रेटरी जबलपुर II महाराजपुर की ओर से हस्ताक्षर करना, दिनांक के साथ", 1, 'L');
        $pdf->MultiCell(195, 10, "{$row['f_26']}", 1, 'L');
        $pdf->MultiCell(195, 10, "27. गाइड लाइन के अनुसार सत्संग घर में मेंटेन किया जाने 21 रजिस्टर और 22 फ़ाइल, अद्यतन खसरा व अन्य राजस्व रिकार्ड को देखा गया अथवा नहीं, इनके संधारण के संबंध में विजिटर फंक्शनरी का प्रतिवेदन", 1, 'L');
        $pdf->MultiCell(195, 10, "{$row['f_27']}", 1, 'L');
        $pdf->MultiCell(195, 10, "28. अन्य कोई रिमार्क", 1, 'L');
        $pdf->MultiCell(195, 10, "{$row['f_28']}", 1, 'L');
        $pdf->Output();
        
    }
}

// echo "<script>window.location.href='$hostname/Form_submitted.php'</script>";

?>