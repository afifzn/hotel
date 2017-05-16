<html>  
<head>  
    <title>Java Script</title>
</head>  
<script type="text/javascript">  
    function data(){
    var quis    = parseFloat(document.page.quis.value);
    var tugas   = parseFloat(document.page.tugas.value);
    var uts     = parseFloat(document.page.uts.value);
    var uas     = parseFloat(document.page.uas.value);
    var ip      = "";
    var ket     = "";

    var na = (0.10*quis)+(0.20*tugas)+(0.30*uts)+(0.40*uas);

        if ((na > 80) && (na <=100))
        {
            ip="A";
            ket="Lulus dengan sangat baik";
        }
            else if ((na > 69) && (na<=80))
            {
                ip="B";
                ket="Lulus dengan baik";
            }
            else if ((na > 55) && (na<=69))
            {
                ip="C";
                ket="Lulus dengan cukup";
            }
            else if ((na > 38) && (na<=55))
            {
                ip="D";
                ket="Lulus dengan kurang";
            }
                else
                {
                    ip="E";
                    ket="Tidak Lulus";
                }
            document.page.ipk.value=ip;
            document.page.ket.value=ket;
        }

</script>  
    <body bgcolor="silver">
        <form name="page">
            <h3 align="center" >UNIVERSITAS SEMUA BISA </h3>
                <table border="1" cellpadding="2" cellspacing="1" align="center" width="70%">
                    <tr>
                        <td width="100%" colspan="4"><h2 align="center">Menghitung Nilai IPK</h2> </td> 
                    </tr>
                    <tr>
                        <td width="25%" align="center">Quis(10%) <input type="text" size="10" name="quis"></td>
                        <td width="25%" align="center">Tugas(20%)<input type="text" size="10" name="tugas"></td>
                        <td width="25%" align="center">UTS(30%)  <input type="text" size="10" name="uts"></td>
                        <td width="25%" align="center">UAS(40%) <input type="text" size="10" name="uas"></td>
                    </tr>
                    <tr>
                        <td colspan="4" align="center">
                        <input  type="button" value="Hitung" size="20px" onclick="data()">
                        <input  type="reset" value="ulang">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4" width="50%" align="center">Indeks Prestasi <input type="text" size="10" name="ipk">Keteragan<input type="text" size="20" name="ket"></td>
                    </tr>
                </table>
    </body>
</html>  