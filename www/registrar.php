<?php


$conexion = mysqli_connect('localhost', 'root', '', 'adopciones')
    or die(mysqli_error($mysqli));


insertar($conexion);

function insertar($conexion)
{

    $name = $_POST['name'];
    $apellidos = $_POST['apellidos'];
    $celular = $_POST['celular'];
    $ocupacion = $_POST['ocupacion'];
    $email = $_POST['email'];

    $rpname = $_POST['rpname'];
    $rpcelular = $_POST['rpcelular'];
    $rprelacion = $_POST['rprelacion'];
    $rfname = $_POST['rfname'];
    $rfcelular = $_POST['rfcelular'];
    $rfrelacion = $_POST['rfrelacion'];

    /* $spname = $_POST['spname'];
    $spedad = $_POST['spedad'];
    $spparentesco  = $_POST['spparentesco'];


    $spbebeo = $_POST['spbebeo'];
    $spalergiao = $_POST['spalergiao'];
 */

    $direccion = $_POST['direccion'];
    $provincia = $_POST['provincia'];
    $ciudad = $_POST['ciudad'];
    $inmueble = $_POST['inmueble'];
    $propio = $_POST['propio'];
    $mudar = $_POST['mudar'];

    $name_arriendo = $_POST['name_arriendo'];
    $tel_arriendo = $_POST['tel_arriendo'];



    /* if (!$spname) {
        $subq1 = "NULL";
    } else {
        $subq1 = "'$spname'";
    }

    if (!$spedad) {
        $subq2 = "NULL";
    } else {
        $subq2 = "'$spedad'";
    }

    if (!$spparentesco) {
        $subq3 = "NULL";
    } else {
        $subq3 = "'$spparentesco'";
    } */


    if (!$name_arriendo) {
        $subq4 = "NULL";
    } else {
        $subq4 = "'$name_arriendo'";
    }

    if (!$tel_arriendo) {
        $subq5 = "NULL";
    } else {
        $subq5 = "'$tel_arriendo'";
    }


    $consulta = "INSERT INTO  solicitantes (name, apellidos, celular,
    ocupacion, email, rpname, rpcelular, rprelacion, rfname, rfcelular,
    rfrelacion, direccion, provincia, ciudad, inmueble, propio, mudar, name_arriendo, 
    tel_arriendo) values ('$name', '$apellidos', '$celular', '$ocupacion',
    '$email', '$rpname', '$rpcelular', '$rprelacion', '$rfname', '$rfcelular',
    '$rfrelacion', '$direccion', '$provincia', '$ciudad', '$inmueble', 
    '$propio', '$mudar',$subq4, $subq5)";



    if (!mysqli_query($conexion, $consulta))
        echo "hubo un error" . $consulta;
    else
        header("location:mensaje-de-envio.html");
}




/* 
if (!mysqli_query($conexion, $consulta))
echo "hubo un error:" . $consulta;
else
echo '<script src="js/script.js">
        </script>';
 */
/* 
$name = $_POST['name'];
$apellidos = $_POST['apellidos'];
$celular = $_POST['celular'];
$ocupacion = $_POST['ocupacion'];
$email = $_POST['email'];

$rpname = $_POST['rpname'];
$rpcelular = $_POST['rpcelular'];
$rprelacion = $_POST['rprelacion'];
$rfname = $_POST['rfname'];
$rfcelular = $_POST['rfcelular'];
$rfrelacion = $_POST['rfrelacion'];

$spname = $_POST['spname'];
$spedad = $_POST['spedad'];
$spparentesco  = $_POST['spparentesco'];


$spbebeo = $_POST['spbebeo'];
$spalergiao = $_POST['spalergiao'];


$direccion = $_POST['direccion'];
$provincia = $_POST['provincia'];
$ciudad = $_POST['ciudad'];
$inmueble = $_POST['inmueble'];
$propio = $_POST['propio'];
$mudar = $_POST['mudar'];

$name_arriendo = $_POST['name_arriendo'];
$tel_arriendo = $_POST['tel_arriendo'];

if (
    !empty($name) || !empty($apellidos) || !empty($celular) || !empty($ocupacion) || !empty($email)
    || !empty($rpname) || !empty($rpcelular) || !empty($rprelacion) || !empty($rfname) || !empty($rfcelular) || !empty($rfrelacion)
    || !empty($spnombres) || !empty($spedad) || !empty($spparentesco) || !empty($spbebeo) || !empty($spalergiao)
    || !empty($direccion) || !empty($provincia) || !empty($ciudad) || !empty($inmueble) || !empty($propio) || !empty($mudar)
    || !empty($name_arriendo) || !empty($tel_arriendo)
) {
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "adopciones";

    $conexion = new mysqli($host, $dbusername, $dbpassword, $dbname);
    if (mysqli_connect_error()) {
        die('connect error(' . mysqli_connect_errno() . ')' . mysqli_connect_error());
    } else {
        $SELECT = "SELECT celular from personales where celular = ? limit 1";
        $INSERT = "INSERT INTO personales(name, apellidos, celular, ocupacion, email,
        rpanme, rpcelular, rprelacion, rfname, rfcelular, rfrelacion, spname, spedad, 
        spparentesco, spbebeo, spalergiao, direccion, provincia, ciudad, inmueble, 
        propio, mudar, name_arriendo, tel_arriendo) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,
        ?,?,?,?,?,?,?,?,?,?,)";

        $stmt = $conexion->prepare($SELECT);
        $stmt->bind_param("i", $celular);
        $stmt->execute();
        $stmt->bind_result($celular);
        $stmt->store_result();
        $rnum = $stmt->num_rows;
        if ($rnum == 0) {
            $stmt->close();
            $stmt = $conexion->prepare($INSERT);
            $stmt->bind_param("i",);
        }
    }
} else {
    echo "todos los campos señalados con * son obligatorios";
    die();
}
 */