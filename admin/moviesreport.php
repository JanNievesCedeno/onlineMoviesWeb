<?php

function fetch_data ()
{
    require_once ('../backend/conecdb.php');
    $output = '';
    $query = "SELECT movie_id, movie_amount, movie_name, movie_year, movie_genre, movie_cost FROM movies ;";
    $result = mysqli_query($conex,$query);
    $resultCheck = mysqli_num_rows($result);
    if($resultCheck > 0){

    while($row = mysqli_fetch_assoc($result))
    {
        $output .= '<tr>
            <td> '.$row["movie_id"].'</td>
            <td> '.$row["movie_name"].'</td>
            <td> '.$row["movie_year"].'</td>
            <td> '.$row["movie_genre"].'</td>
            <td> $ '.$row["movie_cost"].'</td>
            <td> '.$row["movie_amount"].'</td>
            </tr>            
            ';
    }
    return $output; 
}
}



    require_once ('library/tcpdf.php');
    $pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, "UTF-8", false);
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetTitle("Movies View Reports");
    $pdf->SetHeaderData('','', PDF_HEADER_TITLE, PDF_HEADER_STRING);
    $pdf->SetHeaderFont(Array(PDF_FONT_NAME_MAIN,'', PDF_FONT_SIZE_MAIN));
    $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA,'', PDF_FONT_SIZE_DATA));
    $pdf->SetDefaultMonospacedFont('helvetica');
    $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
    $pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);
    $pdf->setPrintHeader(false);
    $pdf->setPrintFooter(false);
    $pdf->SetAutoPageBreak(TRUE, 10);
    $pdf->SetFont('helvetica', '', 11);

    $pdf->AddPage();
    $pdf->Cell (180,10,"Movies View Report",'',1,'C');
    $content = '';
    $content .= '
    <table  border="1" cellspacing="0" cellpadding="3">                                      
        <tr>
            <th>Movie id</th>
            <th>Movie name</th>
            <th>Movie year</th>
            <th>Movie genre</th>
            <th>Movie Cost</th>
            <th>Movie Amount</th>                                              
        </tr>
    ';
    
    $content .= fetch_data();
    $content .= '</table>';
    $pdf->writeHTML ($content);
    $pdf->Output();



