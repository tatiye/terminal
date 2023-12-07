<?php
/**
 * TatiyeNet - PHP Helpers for Develover wolf05
 *
 * (The MIT License)
 *
 * Copyright (c) 2018 wolf05 <info@tatiye.net / https://www.facebook.com/tatiyeNet/>.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

namespace terminal;
use app\tatiye;
use ZipArchive;
class init {

   /*
   |--------------------------------------------------------------------------
   | Initializes Db 
   |--------------------------------------------------------------------------
   | Develover Tatiye.Net 2022
   | @Date Kam 24 Mar 2022 12:16:50  WITA 
   */
    public static function consule($key='') { 
        $storage=json_decode($key, true);
        $instance=$storage["primarykey"];   
     return self::$instance($storage);
  }
   /* and class Db */
   /*
   |--------------------------------------------------------------------------
   | Initializes raw 
   |--------------------------------------------------------------------------
   | Develover Tatiye.Net 2022
   | @Date  
   */
   public static function raw($key,$des){
           return tatiye::setRaw($key,$des);
       
   }
   /* and class raw */

   /*
   |--------------------------------------------------------------------------
   | Initializes versi 
   |--------------------------------------------------------------------------
   | Develover Tatiye.Net 2022
   | @Date  
   */
   public static function versi($key){
        echo self::raw(tatiye::platfrom(),["Development","Value"]);
        echo self::raw(tatiye::component(),["App Public","Status"]);
       
   }
   /* and class versi */
    /*
   |--------------------------------------------------------------------------
   | Initializes versi 
   |--------------------------------------------------------------------------
   | Develover Tatiye.Net 2022
   | @Date  
   */
   public static function licenced($key){
         return tatiye::tabelRaw(tatiye::licenced());
       
   }
   /* and class versi */
   /*
   |--------------------------------------------------------------------------
   | Initializes index 
   |--------------------------------------------------------------------------
   | Develover Tatiye.Net 2022
   | @Date  
   */
   public static function index($key){
         return $key;
       
   }
   /* and class index */
   /*
   |--------------------------------------------------------------------------
   | Initializes tabel 
   |--------------------------------------------------------------------------
   | Develover Tatiye.Net 2022
   | @Date  
   */
   public static function tabel($key){
       $id=$key['storage'];
       if (!empty($id[1])) {
            $variable=tatiye::dbtabel()->show_tabelName($id[1]);
            if (!empty($variable[0]['no'])) {
               $show=tatiye::dbtabel()->colom_tabel($id[1]);
               echo tatiye::tabelRaw($variable);
               echo tatiye::tabelRaw($show);
            } else {
                // code...
            }

       } else {
       echo tatiye::tabelRaw(tatiye::dbtabel()->show_tabel(),0);
           // code...
       }
       
       
   }
   /* and class tabel */
   /*
   |--------------------------------------------------------------------------
   | Initializes public 
   |--------------------------------------------------------------------------
   | Develover Tatiye.Net 2022
   | @Date  
   */
   public static function public($ke){
         return self::raw(tatiye::component(),["App Public","Status"]);
       
   }
   /* and class public */
   /*
   |--------------------------------------------------------------------------
   | Initializes public 
   |--------------------------------------------------------------------------
   | Develover Tatiye.Net 2022
   | @Date  
   */
   public static function system($key){
        echo tatiye::shell($key);
 

       
   }
   /* and class public */



   /*
   |--------------------------------------------------------------------------
   | Initializes development 
   |--------------------------------------------------------------------------
   | Develover Tatiye.Net 2022
   | @Date  
   */
   public static function development($key){
         return tatiye::tabelRawColom(tatiye::development(),["id","package","lisensi","install"]);
       
   }
 
   public static function uid($key){
      return tatiye::setRaw(tatiye::userid(),["Variabel User Id","Value"]);
   }
   public static function token($key){
      return tatiye::setRaw(tatiye::uidToken(),["Access Token User","Value"]);
   }
   public static function package($key){
      $id=$key['storage'];
       if($id[1] == 'api') {
            if($id[2] == 'file') {
                  $nets=tatiye::rowFalse('package',$id[3],true);
                 if (!empty($nets['Row'])) {
                      if ($id[4]=='token') {
                         return  tatiye::tabelRawColom(tatiye::getFileApi($id[3]),["id","file","token"]);
                      } elseif ($id[4]=='id') {
                          if ($id[6]=='query') {
                             return tatiye::tabelRawColom(tatiye::getFileApi($id[3],$id[5]),["id","file","token"]);
                          } else {
                             return tatiye::tabelRawColom(tatiye::getFileApi($id[3],$id[5]),["id","file","token"]);
                              // code...
                          }
                          
                      } else {
                          return  tatiye::tabelRawColom(tatiye::getFileApi($id[3]),["id","package","file","type"]);
                      }
                      
                 } else {
                      return tatiye::tabelRaw(tatiye::rowFalse('package',$id[3]),0);
                 }
                 
            } else {
               return tatiye::tabelRawColom(tatiye::publicPackageApi(),["Package","Version"],[0,1]);
            }
       } elseif ($id[1] == 'diteruskan'){
      
       } else {
         return tatiye::tabelRawColom(tatiye::publicPackage(),["Package","Icon","Status"],[0,2,3]);
      
       }
       
   }
/*
|--------------------------------------------------------------------------
| Initializes consul nonton  Film Everything Everywhere All at Once
|--------------------------------------------------------------------------
| Develover Tatiye.Net 2022
| @Date  12/5/2023 5:07:00 PM
*/
public static function create($key){
     return tatiye::createProject($key);
}
/* and class consul */

public static function consul($data){
 
    
}
/* and class consul */
 /*
 |--------------------------------------------------------------------------
 | Initializes json 
 |--------------------------------------------------------------------------
 | Develover Tatiye.Net 2022
 | @Date  
 */
 public static function json($key){
        $id=$key['storage'];
        $bd=tatiye::getFileApi($id[3],$id[5]);
        echo json_encode($bd[0]['data']);    
 }
 /* and class json */
 /*
 |--------------------------------------------------------------------------
 | Initializes sdk 
 |--------------------------------------------------------------------------
 | Develover Tatiye.Net 2022
 | @Date  
 */


 public static function sdk($key){
        $id=$key->storage;
        $bd=tatiye::getFileApi($id[3],$id[5]);
        return $bd[0]['data'];  
     
 }
 /* and class sdk */
 /*
 |--------------------------------------------------------------------------
 | Initializes instal https://github.com/tatiye/package/tree/a141aa37e665ab67462afd4e517c513452b809fc/bukukas
 |--------------------------------------------------------------------------
 | Develover Tatiye.Net 2022
 | @Date  
 */
 public static function instal($key){
    return tatiye::installation($key);
 }
 /* and class instal */
 /*
 |--------------------------------------------------------------------------
 | Initializes auth 
 |--------------------------------------------------------------------------
 | Develover Tatiye.Net 2022
 | @Date  
 */
 public static function auth($key){
       return 'aaaaaaaaa';
     
 }
 /* and class auth */
 /*
 |--------------------------------------------------------------------------
 | Initializes update 
 |--------------------------------------------------------------------------
 | Develover Tatiye.Net 2022
 | @Date  
 */
 public static function update($key){
        return tatiye::installation($key);
     
 }
 /* and class update */
 /*
 |--------------------------------------------------------------------------
 | Initializes update 
 |--------------------------------------------------------------------------
 | Develover Tatiye.Net 2022
 | @Date  
 */
 public static function delete($key){
        return tatiye::installation($key);
     
 }
 /* and class update */
 /*
 |--------------------------------------------------------------------------
 | Initializes phpv 
 |--------------------------------------------------------------------------
 | Develover Tatiye.Net 2022
 | @Date  
 */
 public static function phpv($key){
       return 'PHP '.tatiye::phpv();
     
 }
 /* and class phpv */


}