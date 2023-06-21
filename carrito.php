<html>
    <ead>
        <title>Carro</title>
    </head>
<body bgcolor="#09a6e4">
<font face="Arial" color="white">
    <h1 align="center">CARRITO</h1>
    <h4 align="center">Se agrego exitosamente al carrito el siguiente producto: </h4>
    <h3>
    <?php
    if (isset($_POST['p1'])) {
        $archivo = "carrito.txt";
        $producto="Aqynzio 1 Capsula Caja     $3,941.00 MXN <br>";
        echo "Aqynzio 1 Capsula ";
        file_put_contents($archivo,$producto, FILE_APPEND);
    } elseif (isset($_POST['p2'])) {
        $archivo = "carrito.txt";
        $producto="Aditral 7 Tabletas Caja     $395.50 MXN <br>";
        echo "Aditral 7 Tabletas Caja";
        file_put_contents($archivo,$producto, FILE_APPEND);
    } 
    elseif (isset($_POST['p3'])) {
        $archivo = "carrito.txt";
        $producto="Arasamilla 1 Solucion Caja     $11,228.00 MXN <br>";
        echo "Arasamilla 1 Solucion Caja";
        file_put_contents($archivo,$producto, FILE_APPEND);
    } 
    elseif (isset($_POST['p4'])) {
        $archivo = "carrito.txt";
        $producto="Bemtad 1 Solucion Frasco    $16,268.00 MXN <br>";
        echo "Bemtad 1 Solucion Frasco";
        file_put_contents($archivo,$producto, FILE_APPEND);
    } 
    elseif (isset($_POST['p5'])) {
        $archivo = "carrito.txt";
        $producto="Antivon 10 Tabletas Caja    $988.00 MXN <br>";
        echo "Antivon 10 Tabletas Caja";
        file_put_contents($archivo,$producto, FILE_APPEND);
    } 
    elseif (isset($_POST['p6'])) {
        $archivo = "carrito.txt";
        $producto="Aditral 14 Tableta Caja    $712.50 MXN <br>";
        echo "Aditral 14 Tableta Caja";
        file_put_contents($archivo,$producto, FILE_APPEND);
    }
    elseif (isset($_POST['p7'])) {
        $archivo = "carrito.txt";
        $producto="Calutol Tabletas Paquete    $4,356.00 MXN <br>";
        echo "Calutol Tabletas Paquete";
        file_put_contents($archivo,$producto, FILE_APPEND);
    }  
    elseif (isset($_POST['p8'])) {
        $archivo = "carrito.txt";
        $producto="Cubicine Inyeccion 1 pz Frasco    $3,443.00 MXN <br>";
        echo "Cubicine Inyeccion 1 pz Frasco";
        file_put_contents($archivo,$producto, FILE_APPEND);
    }      
    elseif (isset($_POST['p9'])) {
        $archivo = "carrito.txt";
        $producto="Doxopeg 1 Solucion Frasco    $15,052.00 MXN <br>";
        echo "Doxopeg 1 Solucion Frasco ";
        file_put_contents($archivo,$producto, FILE_APPEND);
    }     
    elseif (isset($_POST['p10'])) {
        $archivo = "carrito.txt";
        $producto="Camptosar Inyectable 1 pz   $9,731.00 MXN <br>";
        echo "Camptosar Inyectable 1 pz";
        file_put_contents($archivo,$producto, FILE_APPEND);
    }   
    elseif (isset($_POST['p11'])) {
        $archivo = "carrito.txt";
        $producto="Certican 60 Tabletas Caja   $11,017.50 MXN <br>";
        echo "Certican 60 Tabletas Caja";
        file_put_contents($archivo,$producto, FILE_APPEND);
    }  
    elseif (isset($_POST['p12'])) {
        $archivo = "carrito.txt";
        $producto="Decadurabolin 2 Solucion Jeringa   $1,171.00 MXN <br>";
        echo "Decadurabolin 2 Solucion Jeringa";
        file_put_contents($archivo,$producto, FILE_APPEND);
    }  
    elseif (isset($_POST['p13'])) {
        $archivo = "carrito.txt";
        $producto="Plastipak Jeringa 3ml   $9.00 MXN <br>";
        echo "Plastipak Jeringa 3ml";
        file_put_contents($archivo,$producto, FILE_APPEND);
    }    
    elseif (isset($_POST['p14'])) {
        $archivo = "carrito.txt";
        $producto="Plastipak Jeringa 3ml   $31.00 MXN <br>";
        echo "Plastipak Jeringa 3ml";
        file_put_contents($archivo,$producto, FILE_APPEND);
    } 
    elseif (isset($_POST['p15'])) {
        $archivo = "carrito.txt";
        $producto="BD Ultra-Fine para insulina  $65.00 MXN <br>";
        echo "BD Ultra-Fine para insulina";
        file_put_contents($archivo,$producto, FILE_APPEND);
    } 
    elseif (isset($_POST['p16'])) {
        $archivo = "carrito.txt";
        $producto="BD Ultra-Fine Aguja  $70.50 MXN <br>";
        echo "BD Ultra-Fine Aguja";
        file_put_contents($archivo,$producto, FILE_APPEND);
    } 
    elseif (isset($_POST['p17'])) {
        $archivo = "carrito.txt";
        $producto="BD Ultra-Fine Jeringa  $9.00 MXN <br>";
        echo "BD Ultra-Fine Jeringa";
        file_put_contents($archivo,$producto, FILE_APPEND);
    } 
    elseif (isset($_POST['p18'])) {
        $archivo = "carrito.txt";
        $producto="Citizen Micro HumanTech  $598.00 MXN <br>";
        echo "Citizen Micro HumanTech";
        file_put_contents($archivo,$producto, FILE_APPEND);
    } 
    elseif (isset($_POST['p19'])) {
        $archivo = "carrito.txt";
        $producto="Microlife Termometro Digital de Oido  $558.00 MXN <br>";
        echo "Microlife Termometro Digital de Oido";
        file_put_contents($archivo,$producto, FILE_APPEND);
    } 
    elseif (isset($_POST['p20'])) {
        $archivo = "carrito.txt";
        $producto="Microlife Termometro Infrarojo  $750.00 MXN <br>";
        echo "Microlife Termometro Infrarojo";
        file_put_contents($archivo,$producto, FILE_APPEND);
    } 
    elseif (isset($_POST['p21'])) {
        $archivo = "carrito.txt";
        $producto="Biomsk Cubrebocas  $115.00 MXN <br>";
        echo "Biomsk Cubrebocas";
        file_put_contents($archivo,$producto, FILE_APPEND);
    } 
    elseif (isset($_POST['p22'])) {
        $archivo = "carrito.txt";
        $producto="Kleenex Mascarrilla Desechables  $108.00 MXN <br>";
        echo "Kleenex Mascarrilla Desechables";
        file_put_contents($archivo,$producto, FILE_APPEND);
    } 
    elseif (isset($_POST['p23'])) {
        $archivo = "carrito.txt";
        $producto="Star Mascarilla KN95 Negro  $30.00 MXN <br>";
        echo "Star Mascarilla KN95 Negro";
        file_put_contents($archivo,$producto, FILE_APPEND);
    } 
    elseif (isset($_POST['p24'])) {
        $archivo = "carrito.txt";
        $producto="Star Mascarilla KN95 Gris  $30.00 MXN <br>";
        echo "Star Mascarilla KN95 Gris";
        file_put_contents($archivo,$producto, FILE_APPEND);
    }
    elseif (isset($_POST['p25'])) {
        $archivo = "carrito.txt";
        $producto="Feminis Aceite de Pescado Concentrado  $328.00 MXN <br>";
        echo "Feminis Aceite de Pescado Concentrado";
        file_put_contents($archivo,$producto, FILE_APPEND);
    } 
    elseif (isset($_POST['p26'])) {
        $archivo = "carrito.txt";
        $producto="C Boost Omega 3  $148.00 MXN <br>";
        echo "C Boost Omega 3";
        file_put_contents($archivo,$producto, FILE_APPEND);
    } 
    elseif (isset($_POST['p27'])) {
        $archivo = "carrito.txt";
        $producto="One Drop Suplemento Vitaminas A y D  $348.00 MXN <br>";
        echo "One Drop Suplemento Vitaminas A y D";
        file_put_contents($archivo,$producto, FILE_APPEND);
    } 
    elseif (isset($_POST['p28'])) {
        $archivo = "carrito.txt";
        $producto="Conecta Gold  $388.00 MXN <br>";
        echo "Conecta Gold ";
        file_put_contents($archivo,$producto, FILE_APPEND);
    } 
    elseif (isset($_POST['p29'])) {
        $archivo = "carrito.txt";
        $producto="Conecta Junior`s  $338.00 MXN <br>";
        echo "Conecta Junior`s ";
        file_put_contents($archivo,$producto, FILE_APPEND);
    } 
    elseif (isset($_POST['p30'])) {
        $archivo = "carrito.txt";
        $producto="Neurobion Regular  $218.00 MXN <br>";
        echo "Neurobion Regular";
        file_put_contents($archivo,$producto, FILE_APPEND);
    } 
    elseif (isset($_POST['p31'])) {
        $archivo = "carrito.txt";
        $producto="Berocca Vitaminas, Calcio y Magnesio  $268.00 MXN <br>";
        echo "Berocca Vitaminas, Calcio y Magnesio";
        file_put_contents($archivo,$producto, FILE_APPEND);
    } 
    elseif (isset($_POST['p32'])) {
        $archivo = "carrito.txt";
        $producto="Berocca Vitaminas Efervescente  $138.00 MXN <br>";
        echo "Berocca Vitaminas Efervescente";
        file_put_contents($archivo,$producto, FILE_APPEND);
    } 
    elseif (isset($_POST['p33'])) {
        $archivo = "carrito.txt";
        $producto="Bedoyecta Oral  $288.00 MXN <br>";
        echo "Bedoyecta Oral";
        file_put_contents($archivo,$producto, FILE_APPEND);
    } 
    elseif (isset($_POST['p34'])) {
        $archivo = "carrito.txt";
        $producto="Caltrate 600+ M Suplementos Minerales  $158.00 MXN <br>";
        echo "Caltrate 600+ M Suplementos Minerales";
        file_put_contents($archivo,$producto, FILE_APPEND);
    } 
    elseif (isset($_POST['p35'])) {
        $archivo = "carrito.txt";
        $producto="C - Tech  $368.00 MXN <br>";
        echo "C - Tech";
        file_put_contents($archivo,$producto, FILE_APPEND);
    } 
    elseif (isset($_POST['p36'])) {
        $archivo = "carrito.txt";
        $producto="Essential Nutrition Vitamina D  $168.00 MXN <br>";
        echo "Essential Nutrition Vitamina D ";
        file_put_contents($archivo,$producto, FILE_APPEND);
    } 
    elseif (isset($_POST['p37'])) {
        $archivo = "carrito.txt";
        $producto="Avent Vaso con Boquilla de 260  $126.00 MXN <br>";
        echo "Avent Vaso con Boquilla de 260";
        file_put_contents($archivo,$producto, FILE_APPEND);
    } 
    elseif (isset($_POST['p38'])) {
        $archivo = "carrito.txt";
        $producto="Evenflo Biberon Acuario 4 Oz $29.00 MXN <br>";
        echo "Evenflo Biberon Acuario 4 Oz";
        file_put_contents($archivo,$producto, FILE_APPEND);
    } 
    elseif (isset($_POST['p39'])) {
        $archivo = "carrito.txt";
        $producto="Evenflo Biberon Acuario 8 Oz $42.50 MXN <br>";
        echo "Evenflo Biberon Acuario 8 Oz";
        file_put_contents($archivo,$producto, FILE_APPEND);
    } 
    elseif (isset($_POST['p40'])) {
        $archivo = "carrito.txt";
        $producto="Miyako Pera de hule No.1 $32.00 MXN <br>";
        echo "Miyako Pera de hule No.1";
        file_put_contents($archivo,$producto, FILE_APPEND);
    } 
    elseif (isset($_POST['p41'])) {
        $archivo = "carrito.txt";
        $producto="Trojan Preservativos Piel desnuda $78.00 MXN <br>";
        echo "Trojan Preservativos Piel desnuda";
        file_put_contents($archivo,$producto, FILE_APPEND);
    } 
    elseif (isset($_POST['p42'])) {
        $archivo = "carrito.txt";
        $producto="Trojan Preservativos Piel desnuda $168.00 MXN <br>";
        echo "Trojan Preservativos Piel desnuda";
        file_put_contents($archivo,$producto, FILE_APPEND);
    } 
    elseif (isset($_POST['p43'])) {
        $archivo = "carrito.txt";
        $producto="Trojan Preservativos Texturizados $78.50 MXN <br>";
        echo "Trojan Preservativos Texturizados";
        file_put_contents($archivo,$producto, FILE_APPEND);
    } 
    elseif (isset($_POST['p44'])) {
        $archivo = "carrito.txt";
        $producto="Prudence Condones Masculinos $211.00 MXN <br>";
        echo "Prudence Condones Masculinos";
        file_put_contents($archivo,$producto, FILE_APPEND);
    } 
    elseif (isset($_POST['p45'])) {
        $archivo = "carrito.txt";
        $producto="Picard Chocolate sin azucar $68.00 MXN <br>";
        echo"Picard Chocolate sin azucar";
        file_put_contents($archivo,$producto, FILE_APPEND);
    } 
    elseif (isset($_POST['p46'])) {
        $archivo = "carrito.txt";
        $producto="Chocolate Zero Chocolate Amargo $42.00 MXN <br>";
        echo"Chocolate Zero Chocolate Amargo ";
        file_put_contents($archivo,$producto, FILE_APPEND);
    } 
    elseif (isset($_POST['p47'])) {
        $archivo = "carrito.txt";
        $producto="Picard Mini Snacks Chocolate $20.50 MXN <br>";
        echo"Picard Mini Snacks Chocolate";
        file_put_contents($archivo,$producto, FILE_APPEND);
    } 
    elseif (isset($_POST['p48'])) {
        $archivo = "carrito.txt";
        $producto="Dont Worry Quinoa Bites Barritas $88.00 MXN <br>";
        echo"Dont Worry Quinoa Bites Barritas";
        file_put_contents($archivo,$producto, FILE_APPEND);
    } 
    ?>
    </h3>
    <br><br><br>
    <p align="center">
    <button onclick="location.href='carritof.php'" style="background-color: #0d2881; color: white; border: solid;  border-width: 4px; cursor: pointer; width: 200px; height: 50px;" ><b>IR AL CARRITO</b></button>
    <br><br>  
    <button onclick="location.href='index.html'" style="background-color: #0d2881; color: white; border: solid;  border-width: 4px; cursor: pointer; width: 200px; height: 50px;" ><b>SEGUIR COMPRANDO</b></button>  
    </p>
    </font>
</body>
</html>