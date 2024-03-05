<?php namespace App\Controllers;
class Page extends BaseController {
public function about()
{
    echo "about page";
}
public function contact()
{
    echo "contact page";
}
public function faqs()
{
    echo "Faqs page";
}
public function tos()
{
    echo " Term of Service";
}
public function biodata()
{
    echo "NIM        : 4122016";
    echo "<br>Nama   : Muhamad Bagus Ardiansyah";
    echo "<br>Alamat : Plandaan, Jombang";
    echo "<br>Gender : Laki - Laki";
    echo "<br>Umur   : 20";
    echo "<br>Hobi   : Memancing";
    echo "<br>E-mail : bagusardiansyah614@gmail.com";
    echo "<br>No. HP : 081252756141";
    
   
}
}