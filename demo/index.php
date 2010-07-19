<?php
/*
 *   This program is free software: you can redistribute it and/or modify
 *   it under the terms of the GNU Affero General Public License as published by
 *   the Free Software Foundation, either version 3 of the License, or
 *   (at your option) any later version.
 *
 *   This program is distributed in the hope that it will be useful,
 *   but WITHOUT ANY WARRANTY; without even the implied warranty of
 *   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *   GNU Affero General Public License for more details.
 *
 *   You should have received a copy of the GNU Affero General Public License
 *   along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */

class Config {
  private static $instance;
  public $path = '.';       
  public $licenceFileName = 'licence.txt';
  public $version = '1.1.3';
  
  static function SetInstance($instance){
    self::$instance = $instance;
  }
  
  static function GetInstance(){
    return self::$instance;
  }
  
  function Load()
  {
    if(isset($_GET['path']))
    {
	  if(preg_match('!^\.(/[-a-zA-Z0-9_ ]+)*$!',$_GET['path']) and is_dir($_GET['path'])){
        $this->path = $_GET['path'];
	  }
    }	    
  }
  
  function GetScriptName(){
    return $_SERVER['SCRIPT_NAME'];
  }
  
  function GetPath(){
	return $this->path;
  }
}


class Logo {
  
  
  function hex2bin($h)
  {
  if (!is_string($h)) return null;
  $r='';
  for ($a=0; $a<strlen($h); $a+=2) { $r.=chr(hexdec($h{$a}.$h{($a+1)})); }
  return $r;
  }
  
  function Generate()
  {
  	
    header('Content-Type: image/png'); 
    $image ='89504e470d0a1a0a0000000d49484452000000680000005808060000001966b20c000000017352474200aece1ce900000006624b474400ff00ff00ffa0bda793000000097048597300000dd700000dd70142289b780000000774494d4507d9070c1701156cbce4b00000159f4944415478daed5d7b7855d595ff9d3c4820981a20802d1654c44241b458411cc651405a2d4a75a60ad469d456a6a2a33245ad4c99b1dace0cf5d556acd852d31a51a6be119f88a0280c85a809d80c01819804c84d7273ef3def73f6fecd1fd9dbef345f8084dc84dbce5ddfb73fcde19c7df659bfbd1e7badb5f73548224b69a393016c00f01f007e938e0e73b23c4d2bcd04f079008f0030b200651e4d0550689aa66b18c6d559803213206cdebcb908c06f0cc398900528732817c0689272f3e6cd3e8040b51e515e96af69a371003cdff7f32a2b2b7301f407509b95a0cc21adcef23ff8e0837c00fb498aac04650efd0d8081245957570700dbb34e4266d10500505b5b0b002e802d59803287f2008c0680eddbb7fb0aa0aa74759ca59ed39900dc300c8df7df7f5f3b08555909ca1c3a1740aee779c68e1d3bf20038245bb2129459f6a7882463b11800fc295d1d6725283d340600faf5eb67c46231a6cb41c802943e1a0a00b9b9b94824122e803d5980328b4e0480542a05b4877762598032cbc51e0000f1781c006416a0cca252b5ee417373b3e6695316a0cca1614aade1e0c18300909f95a0cca222000480868606002800d09205287328a9f9d8bf7f7f00b0d311c5ce02943e4aa03d5987d1a347ebbf910528b300ca07801123460040980528f3549c0300c3860d436e6eeed02c40994504f00a49044180993367e61b86519c0528b3e80fb66d8b810307e2e69b6f268053b2006516bd59585848c330307dfaf4fc1123465c910528b3c86c6d6d7dc2755d8461885b6fbdf5d6f4295032dbd2d34a4cd39424695996bcedb6dbae4847bf59094a1fc55f7df5d5359665b1a0a0c0b8fefaeb5764555c86512c169befba2e7373733172e4c8c12fbcf0c25d59159761adbcbcfc97a9544a92643c1e0f2b2b2b3ff797a8e28a01cc42fb768d017f4d52b46fdfbe5b62b1584012050505b9c96472ed5f9204dd42b286a447b24d358be4e324bff2d722454b972e5d60591695c3c0e79e7b6efab1f6d55783ce25f93b92263ba750fddb2a92fdd2f4ce1c926349ce233983e4f0be0469e5ca959f5a96452925f7ecd9932069643240eb3438524acf711cfbc30f3f6c5bbb766df8da6baf49dbb6a5945248291d9295244b7bf0ae02924b95642649a6482694d4a648beaa80ebd56f9e3061c297eaeaea24499aa6c9575e79e5e7990ad03cc5180a21ec8d1b377a252525ae8a611100c78c19c3d75f7f3db42c8b61180a920d244b8ee15da7aa67b5a44a926d52ca36296582a44f5228f0ca490eebcd6fbff6da6b7f6edbb65675b2b6b6765ca601d49f64b302c75fb56a956f188654c098682fb07055c8defce94f7f4ad334e9fbbef07dff8d2ebea388e44865c31a95ba0ca4944e656565dd9c39739a67cc9811ce9933472c5bb6ccb46d3b0c82202019a88973616f7d3f809cf2f2f266c7711886211b1b1b9b48e6651240657a365b9625070f1eaca5c606b008404ee4632e06b0e7adb7de0a8510344d53545757cf8ff43588e43749fe8ae4fb24f793b4238c0eb541b32c2b357af4681b80179554002c2a2ae29d77de19ea99adc6f78ddee2c139e79c73764343c367aaaea6a6e6d79904d05b24e9fbbe7ff7dd776b665900ce3ddc8cbbeaaaab7eab8deb8b2fbe78504ab98ce41ea59e124a451d968220f0c78d1be7a87739aabd04e03eb46f8d7f1b803373e64ca13dad300c6de548f40a1fe6ce9dfba89e108ee3c8babababfcd04800a48ba2499482478de79e769b5f6c3a33d5b5f5fdf26a5a4949261180611fe4b92492184e3fbbe73e8d0a1e6ddbb77b786612849d2f33c4e9e3c594626c2af010ced64228c01b0fac20b2ff434489ee7c595baec0d559777fffdf7c7f4bbe2f1b8d5d577f52640a39517c520083870e040023804a0e008cf7c91e46629a52da5d4b35b0a21ac969696e6a79e7aeac0bc79f3fcd34e3b2da50090cf3fff3cc330a465595cba74a9566512c0aa2e30eea2254b9678beef5308c13d7bf6bcd75bfc183c78f0d8eaea6a2184a06ddbacadad5d77bc01ba80649c240f1e3ca899762457f3ef15a081528ba16ddb7cfcf1c73971e24457a9aaa83d714e3ffdf4849e95a669b2b8b898000480b7a2f6ed486de8d0a117c7e371a945d475ddadbde586cf9831e3df2ccbfa2ce25d5353f3ede309d0152a52c075ebd611400ac0359ddc37806445c4351661187abffffdef13279e78a288001228151907f00680db3ff9e4933524032184bb6cd9326de39a00746bb1bb7cf9f2078568376db25d744d920b7b832f8b172fae314d534faae068ae7e6f02344503b47af56aaae28a099db8e195241ded80d5d5d5b59e75d6595169d1ea6c0580f11d9e8f29fb21860c192215800b8e61ac859ee74905108510524a692b27a734cdf668d89b6fbe19789e47cff3b86fdfbe3f1d2f808669c657555551b9bcd135409e6280add649d69a356bcc8282025b01e32a706e0530a093fec76a1bb775eb562d692ddd951edd92c9e487cacbe23befbc231dc79152ca90642bc9afa5d9f5be46ab55d334595d5dbde478b9d9311d302c2c2c6c8a5c37483eadd55a1886cebdf7deeb2b3ba53db055008e347bff85a4ed799e7ff3cd370b253db7f460acb7fbbe2fe3f138a74e9dcab2b23276582bfd4a79a669e14d5959d95bda7edab62d5a5a5a4e3f1e00dd6959964ca5522c2b2b0b2312f4230d8e10c27ee491478288f7650298d385beb728a32e4f3ef964bde6e9893abad6f33c3f914870fefcf92e80c6499326b94d4d4d0c82400a215c92afabc06f3a54ddc0f2f272cbb66d0641c0fafafa4615e0ed53804a1cc71124595f5f2fa74e9dfa55e54a5b4adfbb1b366c08727272a82a320f0198d8c5f08e4792bb77efd65257ddc3b1ce0d82c0725d978b162d12009600f8e19021439caaaa2a7a9e47dff77d29e553e9e2cfa851a3fe2e1a50adaeae7eb8cf83a55bb76e7dd6b22ce9ba2eabababf7937c594505d8d6d6268b8b8b3583e3004675b1dfbf25d916866170cf3df778ca5eddd1c3b15e298448a552295956564600e56aa64f1b3468507cefdebd0cc3908ee38442885fa68b3f73e6cc79dc711cadeae4b3cf3e5bdaa70001c859b1628565db363dcfa30ed5388e132c5cb83088044ea776a3dfefb44f3a3338f7dc73f5f3637a38d6c5524ab7adad4dce9c3993003645be61f8a851a376c6623129a5a4ebbaa194f247e98a32ac5fbf3ea5e28f7cf4d14737f5793e08c0c2fbeebbcfd76b0dadf2f2f2f2b41b7d4337fbbc8ea4e5fbbe8e5034a4619caf91643299e4d8b16309e0ed8e3663c284097b1289840e0d05246f48077f962f5f3e5b3b242d2d2d72d8b061e3fb3a6187c99327af725d57876f78f9e5976bd5560ba0bbd9c631524ae7f5d75f172a72f0501ac6d8acd40c0b0b0b0960652713adf4fcf3cf8fe985a6effb3ec9b3d3c19faaaaaafd42082693492e5ebcf8dd3e0788e4bd61188624b96bd72e46dce9595d78767a4717b7a4a4e48beaf92480793d1cdb7495b2902fbdf4923e88ef8787d106a7cc9e3d3b65db36a5946c6e6e3ed099f7d5ddb665cb9639c9649224595b5b2b7590b72f013aa85483bcebaebb3440551dd646b52acf139d955f505a710bc913228c1aa06c8f0d605c0fc7b653498f77e9a5974a9540fcd61154f6592fbcf042e0fb3e4dd3e41b6fbcf1481af87382503620954af18a2baef86d5f023451a7bd4dd3e419679ca1d72de77448579b2aa5b03372fdeb2a0f647a9ef7ad0e8c1a0be0941e8eed9b7a6cc96452e4e7e7ebb19d70a4e72eb9e4922b233135b97efdfa513de59310a259dbc1ef7ef7bb2e80fe7d05d06d3a37d4d0d0a06dcffe0ef75ca663775bb66c698a30fe8724bd542a15ce9a35eb23b41f9a97ae719d48f253951271afb9e61a472d965fe9caf32b56acd8609a268320606565656dba129c524a3ef0c0033e80eff555e1e265000a841058bd7ab501c007f064877bce043040088175ebd60d01506518461180f300f40390bb6bd7ae2f01b83f4d631a02e07fd07ece41b86ddbb69c279e78a250a9cd955de9e0c5175fbcacb9b959e4e5e5e18c33ce18fdd24b2f5dd7c331559184611838f3cc33f3015cd41700e5a0fdb82e589685975f7e192a70fa870ef74d01906f5916aaabab0db49fb9e6411d9497939303cff3f29553d0533a09c01f018c0250e0fbbe98376f5ea824fb53002f74a593b56bd72657ae5cf9efb66d63c08001983265caa3e8d981e6e71a46fbe34d4d4d0030a12fd4db595ac7fbbecf134e3881009a3ab96f8f4a8fcb69d3a611c0a7eafa2e1d652e2d2db58fb26632485eacb2b99dfdfb50928b954bed93949ee75993264d7223c52c6776f71bb76fdf9e50c65d2e59b2e4673d28b474349f162d5a4400665f9c17371d6a177463632352a914017456af3c504b4a4b4b0b007cacaee7eaeb411008e55a1f8ebe09e059a54203b5c6d2d53d8500ce5640f40710baae6b9d73ce39793b77ee2c508ec12324bb7d52a261183fb32ceb9ea2a22263ca9429b71a86f16392a96e76b34cade9e0380e77eedc6900c8e90b097a47470f9e78e2099db8fb4e27f71dd00bc5e1c38713c0fdeafa0e5dd7505454943c92fbab24e4553513edc314fed8524a77d3a64d5523478eb423ebb19701e41fe3379ee4fb7ea8257dcc98318bbaf9fc421d4056d104ad6976f4454db6ad7dfbebaebb4e33a3b3b8d9cb2a7dc0fcfc7c1fc00fd4f5b7b567939797d776b4540480fec5c5c52dd75e7bad535959d9964824928944229e48245ae2f1f8a1871e7a68cfe0c1833d25593a8ef724801ea5112ccbdaaf02c09c3f7f7e57424f862a0ba8898263dbb6bcf4d24bf53ab1a2b7019aacd630b42c4baa189779987be74b29e5638f3da6e37365eafaa3524a69db3601b401b8f42800e503d8add49c546ac35580589154baa9fefec931849a3a5bc3fc58572299a6c9d6d6d64d247f42f22e923f207933c99b48fe92e47b2a539b8c8ab6699aa2a2a2225a793bafb7015aa2f336c96492866110c0c6c3dd3f6bd6acfbf2f2f25c05c4d7d5f5d3eaeaeaf62e58b02050d72fee6280f6ab00960368554068406c00f5006e4af39aea6c2184ec44a50ae590b891da8b3fbf4108615996bce9a69b7cc5a300c0e6be88246cd5ea69d5aa55ba2ee15f8fc0d4f3141353d13a0400572bdbd506605a3723e906802fa2fdc797be00a0d7b6a18461e869a62712092984080f6307a5e779b6effbc1810307447979b93f72e4c8684d5f4a2fd47bd38beba7169f48a5525cb56a95a166ef7b00be06a002c073006e886c26db6c18c6f5000e90b4237dad53e03a00b67573831a01d4f5c56a3c2727e75300a7092170f5d5571be3c78fc7e4c99383418306194208044180300cd1dada2ad7af5f9fb36eddbadcc6c64623b257d802d0ac1ca1bdbdbdc3ee326d7f22217cc775dda511a318921cd24549c8ef501594896db34ea744ec1f8fd29c48d0f7bf3a5625f56624e10eb51715efbefb2e00e0edb7df4e141414dcae22d1764545c51f0dc3f8be6118395d9084806488cca6985a174131febf01ac07d0a8feb6151829a5aedf05b014ede76e0f24790749bf2ff6a88ed30651adae59535323b48e96529a1515158794483b002e4fd37ba72bc93d5e12f4d99240d5585cd4e36c742f0c7230c93abd5f470841c771a85d502184fdf0c30f5bcaa648a57307f7f09d7924972bd519923cf93801f4710780a6671a40fd552ee7b32d231a18dbb685e33889993367ba0a18a9c47c420fdff905921f2a707c2965f5d8b163471e27800ee949a9009a9129009d44f246924d1dfdc9542ac5582c26efb8e38e645151911929844f073865911d11aeebbaff3b64c8905daaffbe567583b55aafa9a9d1005d7cbc00ca217906c93b9558dbd170859e45fbf6ede3dcb973999797273b14c36f0430a207033f99e4461d2527e9343737d71617179bca73b2bbbb5e4a43fb0ec99410423cf0c003eccea2ba270015a9cdb97349dea30291fb225bdabde8590752caa41042d4d6d6cad9b3677774279300f60398df83011b4a524d5dfc48d2fce8a38feafbf7ef6f45029f371d07f5b64e698c70d6ac59da7d1e910e804e207925c97f26f93392cf93dc4eb2458527e287d91b2a4926a594562a954a949797c766cc9811e4e7e777dc6815a8c5e5377a18f33a534526f43e22370802b3acac2c1e89b15900fef1388073960e0a3736364a55ca7c282d35852a9c9f3c5c9c4833434ad92684707ddfb7f6eddb57ffe4934f7e72c30d37349f7efae9d1c830235beb25808f3a14861c4b9ba5828bb6f60ca594e6a64d9bf69796965ac750749fee6690ac22297cdf77162c58a027e8aa740154a9a421104298524a110481d3dadadabc63c78e86a79f7efad0e2c58bcd8b2eba28282d2d4d2a55253b48890e7026003c05e0caa355c5746103f27524f7ea7a353551929ee7b5cd9e3d3b11d91299025003e0ace3e4b96995cb969616bf5fbf7e3a127d41ba00fa4a1004aedec7337af4e88462b47f98d084ad3c144fad9c3700b85bd51df44485e5929c46f27e55dd130dc5272dcb6a5ab468d1fec2c242ed09864aa5ddd9d35c4e0fda3f68d51686a17bfef9e7db69da69f1e74e424545c587ba7c68e7ce9df2cb5ffeb20e4558ca863401f800c0e300fe09edbf595d9c26d7f4db24d7282f301159430992564343c3becb2fbfbcd9308c540787630b80d38e63d4e05b1a1c29a575efbdf7461380b3d30ad0f0e1c3c76ddbb64da452294a29190441d0d0d0b06ec3860d57ecdebdbb388d1f3588e45475d8d14ee584a43a9c7a950cc330b571e3c61d679f7db64e3d44c3f03500ae3a8ec00c52a772699b6dae59b3a6292727c755aafeb5b46e3cd0ff939f9f7fcbc2850bdd643249b5a1562855e3a9d0cd6a92df27398964fe51c22e6348ce2679bbdaea58adf4b4abfa8c1e4ee149292dc7715a9f79e6998fa74d9bd6a6a4c5897881b60a3a5e701c811949f2d6c8c9592469ae58b1a23e32d6260025bd02904a6cbd3774e850fbb1c71e0b93c9a4741cc78d1868bd57b34d81275513aa853ae21c3902ccefc42334957beec762b1830f3ef8e0a7e3c78ff795ddd3ce87507f5b00cad3b0f7a7bb2d5f2dc42f23f90b557d1a2d4471c2304cdd78e38df56af248a576cf4dfbd69d8e051700fe1380959797272eb9e412f799679e118d8d8d411004220c433f0cc364c7c38b3a399ccf56f7b409214c2144d0d4d47470cd9a35bb172e5c583f71e2443b2f2fcfeee09e6b90e2aab273660faa6c8ea57d4e15ae1c8c1cd0d4d6e13b2d92eedab56b7796949438919c4f6b6f79918602a6639dd718c5a4494ab20a01e0a4934e724e3df5549e72ca29fdc68f1f1f9f306142cef0e1c3f32dcb0ae3f178d8d2d2e2b7b6b6066d6d6df2c0810327c662b113f7eeddeb7ffcf1c7be10a2bfcab26a12caa6f453a03c05e019005bd9d9a07a9fbeaa1c0f9d9bf254cb2559505f5f7ff0a1871e42454545695353935493d9047010c0d748eee98d411947e28561182301cc07f03d009f57bad65009b7eea4cbb54bdc4fd9942a158ffb2380ed24eb3324e176c1a1438796555555f5dfb4695361656565c98e1d3b4aeaeaea2c296501da7f5d0b4af20580bb00fc8a69fc41a76e01d401ac2168ffd18853d57fc701f8922ac818a240b023451f5a5db500d8abc23ddb493664724ad4300caf83a423520fd11fc02e65177fc734fd1c745a00faff428661cc07f00ba529f602d8a94256bb006c2379a02fc7f37fa32283b7923dd24d0000000049454e44ae426082';
    echo $this->hex2bin($image);
 }
}



class Style {
  function Generate()
  {
  	return 
    '
    body 
    {
      background-color : black;
      font-size : 0.8em;
      color : rgb(200,200,200);
    }
    
    a
    {
      text-decoration : underline;
      font-style: oblique;
      color : rgb(180,180,180);
    }
    
    h1
    {
      color : rgb(220,220,220);
    }
    
    input
    {
      background-color : rgb(40,40,40);
      border : 1px solid rgb(30,30,30);
      color : rgb(230,230,230);
    }
    
    #page
    {
      background-image : url("index.php?want=logo");
      background-repeat:no-repeat;
      background-position : 80% 10px;
      margin : 15px;
      background-color : rgb(10,10,10);
      border : 1px solid rgb(20,20,20);
      padding : 10px;
    }
    
    #logo
    {
      float:left;
      margin-right : 15px;
      margin-bottom : 10px;
    }
    
    .image-bloc
    { margin : 15px;
      background-color : rgb(20,20,20);
      border : 1px solid rgb(30,30,30);
      padding : 10px;
      overflow : auto;
    }
    
    .login-bloc
    { margin : 15px;
      margin-top : 50px;
      background-color : rgb(20,20,20);
      border : 1px solid rgb(30,30,30);
      padding : 10px;
    }
    
    .licence
    { margin : 25px;
      background-color : rgb(20,20,20);
      border : 1px solid rgb(30,30,30);
      padding : 10px;
    }
    
    .image-infos-bloc
    {
      float:left;
      
    }
    
    .image-infos-bloc-right
    {
      float:right;
      
    }
    
    .image-infos
    { 
      margin-bottom : 15px;
      margin-right : 15px;
      padding-bottom : 10px;
      padding-top : 10px;
      padding-right : 10px;
      background-color : rgb(10,10,10);
      border : 1px solid rgb(20,20,20);
    }
    
    .image-infos a
    {
      text-decoration : none;
    }
    
    #footer
    { 
      margin : 15px;
      padding : 10px;
      background-color : rgb(15,15,15);
      border : 1px solid rgb(25,25,25);
      text-align : center;
    }
    
    #top_menu
    {
      float : right;
    }
    
    .image-infos h1
    {
      text-align : center;
      font-size : 1.0em;
      
    }
    
    .album
    {
      background-color : rgb(20,20,20);
      border : 1px solid rgb(30,30,30);
      padding : 0px;
      padding-left : 20px;
      margin : 3px;
    }
    
    .error
    {
      color : red;
    }
    ';
  }
}


class LinkManager{
 private $album;
 private static $instance;
  
  static function SetInstance($instance){
    self::$instance = $instance;
  }
  
  static function GetInstance(){
    return self::$instance;
  }
 
  public function SetAlbum($album){
    $this->album = $album;
  }
 
 public function Generate(){
   return "index.php?path=".$this->album->GetPath();
 }
 
 public function GenerateParent(){
   return "index.php?path=".$this->album->GetParentPath();
 }
 
 public function GenerateWant($want){
   return $this->Generate().'&want='.$want;
 }
 
 public function GeneratePath($path){
   return "index.php?path=".$path;
 }
 
}


class LoginManager {
  private $loginList = array();
  private $passwordList = array();
  private $rulesList = array();
  private $rulesMembersList = array();
  private $groupList = array();
  private $groupMembersList = array();
  
  private $login = 'public';
  private $access_locked = false;
  
  private static $instance;
  
  static function SetInstance($instance){
    self::$instance = $instance;
  }
  
  static function GetInstance(){
    return self::$instance;
  }
 
  public function SetAlbum($album){
    $this->album = $album;
  }
  
  function WantLogin(){
    if(!isset($_GET['want']))
    {
      return false;
    }
    return ($_GET['want'] == 'login');
  }
  
  function WantLogout(){
    if(!isset($_GET['want']))
    {
      return false;
    }
    
    return ($_GET['want'] == 'logout');
  }
 
  function IsLogged(){
    if($this->login == 'public'){
      return false;
    }else{
      return true;
    }
  }
  
  function TryLogin(){
    $login = $_POST['login'];
    $password = $_POST['password'];
    $success = false;
    $this->login = 'public';

    if(($pos = array_search($login,$this->loginList)) !==false)
    {
      if($this->passwordList[$pos] == $password)
      {
        $success = true;
        $_SESSION[$this->GetLoginSessionKey()] = $login;
        $this->login = $login; 
      }
      
    }

    return $success;
  }
  
  function Logout()
  {
    session_destroy();
    $_SESSION[$this->GetLoginSessionKey()] = 'public'; 
    $this->login = 'public';
  }
  
  function Load(){
    session_start();
    if(file_exists("access.php"))
    {
      $conf_file = fopen("access.php", "r");
      $this->access_locked = true;
      while($ligne = fgets($conf_file))
      {
        
        //Load access
        if(preg_match("#^//access ([-_a-zA-Z0-9]+) ([-_a-zA-Z0-9]+)$#", $ligne))
        {
          $ligne = str_replace("\n", "", $ligne); 
          $login = preg_replace("#^//access ([-_a-zA-Z0-9]+) ([-_a-zA-Z0-9]+)$#",'$1',$ligne);
          $password = preg_replace("#^//access ([-_a-zA-Z0-9]+) ([-_a-zA-Z0-9]+)$#",'$2',$ligne);
          $this->loginList[] = $login;
          $this->passwordList[] = $password;
          continue;
        }
        
        //Load group
        if(preg_match("#^//group ([-_a-zA-Z0-9]+)( ([-_a-zA-Z0-9]+))*$#", $ligne))
        {
          $ligne = str_replace("\n", "", $ligne); 
          $group = preg_replace("#^//group ([-_a-zA-Z0-9]+)( ([-_a-zA-Z0-9]+))*$#",'$1',$ligne);
          $this->groupList[] = $group;
          
          $groupMembers = array();
          $groupMembersLine = preg_replace("#^//group ([-_a-zA-Z0-9]+)(( ([-_a-zA-Z0-9]+))*)$#",'$2',$ligne);
          
          while($groupMembersLine != ''){
            $groupMembers[] = preg_replace("#^ ([-_a-zA-Z0-9]+)(( ([-_a-zA-Z0-9]+))*)$#",'$1',$groupMembersLine);
            
            $groupMembersLine = preg_replace("#^ ([-_a-zA-Z0-9]+)(( ([-_a-zA-Z0-9]+))*)$#",'$2',$groupMembersLine);          
          }
          
          $this->groupMembersList[$group] = $groupMembers;
          continue;
        }
        
        //Load rule
        if(preg_match("#^//rule ([-_./a-zA-Z0-9]+)( ([-_a-zA-Z0-9]+))*$#", $ligne))
        {
          $ligne = str_replace("\n", "", $ligne); 
          $rule = preg_replace("#^//rule ([-_./a-zA-Z0-9]+)( ([-_a-zA-Z0-9]+))*$#",'$1',$ligne);
          $this->rulesList[] = $rule;
          $ruleMembers = array();
          if(preg_match("#^//rule ([-_./a-zA-Z0-9]+)( ([-_a-zA-Z0-9]+))+$#", $ligne)){
            $ruleMembersLine = preg_replace("#^//rule ([-_./a-zA-Z0-9]+)(( ([-_a-zA-Z0-9]+))+)$#",'$2',$ligne);
            while($ruleMembersLine != ''){
              $ruleMembers[] = preg_replace("#^ ([-_a-zA-Z0-9]+)(( ([-_a-zA-Z0-9]+))*)$#",'$1',$ruleMembersLine);
              
              $ruleMembersLine = preg_replace("#^ ([-_a-zA-Z0-9]+)(( ([-_a-zA-Z0-9]+))*)$#",'$2',$ruleMembersLine);          
            }
          }
          
          $this->rulesMembersList[$rule] = $ruleMembers;
          continue;
        }
        
      }
     
      fclose($conf_file);
    } else {
      $this->access_locked = false;
    }
    
    //Load current session
    if(isset($_SESSION[$this->GetLoginSessionKey()])){
      $this->login = $_SESSION[$this->GetLoginSessionKey()];
    }else{
      $this->login = 'public';
    }
  }
  
  function GetLoginSessionKey()
  {
    $key = 'login_'.__FILE__;
   return $key;
  }
  
  function IsAccessAllowed($album)
  {
    //Test if access file control access
    if($this->access_locked)
    {
      //Access restricted
      if($this->IsRule($album->GetPath()))
      {
        //Custom access rules
        $accessList = $this->GetRule($album->GetPath());
        if(count($accessList) == 0){
          //Access forbidden for all
          return false;
        }
        if(count($accessList) == 1 && $accessList[0] == 'public'){
          //Access allowed for all
          return true;
        }
        $accessLogin = $this->ExpandGroups($accessList);
        if(in_array($this->login,$accessLogin)){
          //Login found
          return true;
        }else{
          //Login not match
          return false;
        }
      }else{
        
        if($album->GetPath() == '.'){
          //Use default access
          if(count($this->loginList) > 0) {
            //Need login
            if($this->login == 'public'){
              //Not logged
              return false;
            }else{
              if(in_array($this->login,$this->loginList)){
                //Login found
                return true;
              }else{
                //Login not match
                return false;
              }
            }
            
          }else{
            //Nobody can acess
            return false;
          }
        }else{
          //Use the parent access rules
          return $this->IsAccessAllowed($album->GetParent());
        }
      }
    }else{
      //Public Access
      return true;
    }
  }
  
  function IsRule($path){
    if(in_array($path,$this->rulesList)){
      return true;
    }else{
      return false;
    }
  }
  
  function GetRule($path){
    return $this->rulesMembersList[$path];
  }
  
  function ExpandGroups($groups){
    $accessList = array();
    foreach($groups as $group){
      $accessList = array_merge($accessList,$this->ExpandGroup($group));
    }
    return $accessList;
  }
  
  function ExpandGroup($group){
    
    $accessList = array();
    
    if(!in_array($group,$this->groupList)){
      $accessList[] = $group; 
    }else{    
      foreach($this->groupMembersList[$group] as $groupMember)
      {
        if(in_array($groupMember,$this->groupList)){
          $groupContent = $this->ExpandGroup($groupMember);
          $accessList = array_merge($accessList,$groupContent);
        }else{
          $accessList[] = $groupMember;
        } 
      }
    }
    return $accessList;
  }

  function GetCurrentLogin(){
    return $this->login;
  }
}


class Metadatas {
  public $count;
  public $date;
  public $model;
  public $focalLength;
  public $exposure;
  public $focale;
  public $iso;
  public $flash;
  
  function Load($path)
  {
    
    //init
    $this->count = 0;
    $this->model ='';
    $this->date ='';
    $this->focalLength = '';
    $this->exposure='';
    $this->focale='';
    $this->iso='';
    $flash=false;
    
    if(!$this->IsExifAvailable()){return;}
  /*  
    echo "$path:<br />\n";
    
    echo $exif===false ? "Aucun en-tête de donnés n'a été trouvé.<br />\n" : "L'image contient des en-têtes<br />\n";
*/
    /*$exif = exif_read_data($path, 0, true);
    echo "$path:<br />\n";
    foreach ($exif as $key => $section) {
        foreach ($section as $name => $val) {
            echo "$key.$name: $val<br />\n";
      }
    }*/
    
    $ifd0 = exif_read_data($path, 'IFD0');
    
    if($ifd0 !== false){
    
      //Model
      if(array_key_exists('Model',$ifd0)){
        if($ifd0['Model'] == 'NIKON D90'){
          $this->model = 'Nikon D90';
        }elseif($ifd0['Make'] == 'Canon'){
          $this->model = $ifd0['Model'];
        }
		else{
          $this->model = $ifd0['Make'].' '.$ifd0['Model'];
        }
        $this->count++;
      }
      
      //date
      if(array_key_exists('DateTime',$ifd0)){
        $this->date = $ifd0['DateTime'];
        $this->count++;
      }
    }
    
    $exif = exif_read_data($path, 'EXIF');
    
    if($exif !== false){
    
    
      //FocalLength
      if(array_key_exists('FocalLength',$exif)){
        $this->focalLength = $exif['FocalLength'];
        if(preg_match('#^([0-9]+)/([0-9]+)$#i',$this->focalLength)){
          $num = preg_replace('#^([0-9]+)/([0-9]+)$#i','$1',$this->focalLength);
          $den = preg_replace('#^([0-9]+)/([0-9]+)$#i','$2',$this->focalLength);
          $this->focalLength = ($num/$den).'mm';
        }
        $this->count++;
      }
      
      //Exposure time
      if(array_key_exists('ExposureTime',$exif)){
        $this->exposure = $exif['ExposureTime'];
        if(preg_match('#^([0-9]+)/([0-9]+)$#i',$this->exposure)){
          $num = preg_replace('#^([0-9]+)/([0-9]+)$#i','$1',$this->exposure);
          $den = preg_replace('#^([0-9]+)/([0-9]+)$#i','$2',$this->exposure);
          if($num<$den){
            $this->exposure = '1/'.($den/$num);
          }
          $this->exposure = $this->exposure.'s';
        }
        $this->count++;
      }
      
      //Focale
      if(array_key_exists('FNumber',$exif)){
        $this->focale = $exif['FNumber'];
        if(preg_match('#^([0-9]+)/([0-9]+)$#i',$this->focale)){
          $num = preg_replace('#^([0-9]+)/([0-9]+)$#i','$1',$this->focale);
          $den = preg_replace('#^([0-9]+)/([0-9]+)$#i','$2',$this->focale);
          $this->focale = ($num/$den);
        }
        $this->focale = 'f/'.$this->focale;
        $this->count++;
      }
      
      //ISO
      if(array_key_exists('ISOSpeedRatings',$exif)){
        $this->iso = 'ISO '.$exif['ISOSpeedRatings'];
        
        $this->count++;
      }
      
      //Flash
      if(array_key_exists('Flash',$exif)){
        if($exif['Flash'] != 0){
          $this->flash = true;
        }
        
        $this->count++;
      }
      
      
    }
    
    
  }
  
  
  function IsExifAvailable()
  {
      if (extension_loaded('exif')) {
        return true;
      }else{
        return false;
      }
      
  } 
}


class Media {
  private $m_path='';
  private $type;
  function GetPath()
  {
    return $this->m_path;
  }
  
  function SetPath($path)
  {
    $this->m_path = $path;
  }
  
  function GetMetadatas()
  {
    $metas = new Metadatas();
    $metas->Load($this->GetPath());
    return $metas;
  }
  
  function GetType()
  {
    return $this->type;
  }
  
  function SetType($type){
    $this->type = $type;
  }
}

class Ogg {
  private $path;
  
  public function __construct($path){
    $this->path = $path;
  }
  
  function IsOgg(){
    $isOgg;
    $handle = fopen($this->path,'rb');
    
    $type = fread($handle,4);
    if($type === false){
      $isOgg = false;
    }else{
      $isOgg = ($type == 'OggS');
    }
    
    fclose($handle);
    return $isOgg;
  }
  
  function GetCodec(){
    if(!$this->IsOgg()){ 
      return false;
    }
    
    $codec;
    $handle = fopen($this->path,'rb');
    
    //Read begin of header
    fread($handle,0x1D);
    
    $codec = fread($handle,6);
    
    fclose($handle);
    return $codec;
  }
}


class Video extends Media{
  
  function __construct(){
    $this->SetType('video');
  }
}


class Audio extends Media{
  
  function __construct(){
    $this->SetType('audio');
  }
}


class Image extends Media{
  
  function __construct(){
    $this->SetType('image');
  }
    
  function GetWidth(){
    $size = getimagesize($this->GetPath());
    return $size[0];
  }
  
  function GetHeight(){
    $size = getimagesize($this->GetPath());
    return $size[1];
  }
  
  function GetThumb(){
    $name = preg_replace('!^(.*)(\.[a-zA-Z0-9]+)$!','$1',$this->GetPath());
    $extension = preg_replace('!^(.*)(\.[a-zA-Z0-9]+)$!','$2',$this->GetPath());
   
     if(file_exists($name.'-thumb'.$extension)){
        $thumb = new Image();
        $thumb->SetPath($name.'-thumb'.$extension);
        return $thumb;
    }else{
		return $this;
	}
   
  }
}


class MediaManager {
  function GetMedias($path)
  {
	$medias = array();

	$files = scandir($path);
	
	sort($files);
	
	foreach($files as $f){
         if($this->IsImage($path.'/'.$f))
         {
           $image = new Image();
           $image->SetPath($path.'/'.$f);
           $medias[] = $image;
         }
         if($this->IsVideo($path.'/'.$f))
         {
           $video = new Video();
           $video->SetPath($path.'/'.$f);
           $medias[] = $video;
         }
         
         if($this->IsAudio($path.'/'.$f))
         {
           $audio = new Audio();
           $audio->SetPath($path.'/'.$f);
           $medias[] = $audio;
         }
       }
    return $medias;
  }
  
  function IsImage($f)
  {
    $is_image = false;
    if(preg_match('#.jpg$#i',$f))
    {
      $is_image = true;
    }
  
    if(preg_match('#.bmp$#i',$f))
    {
      $is_image = true;
    }
   
    if(preg_match('#.png$#i',$f))
    {
      $is_image = true;
    }
    
    if(preg_match('#.jpeg$#i',$f))
    {
      $is_image = true;
    }
    
    if($is_image){
      if(preg_match('#^(.*)-thumb\.([0-9a-wA-Z])#',$f)){
        //Is thumb
        $is_image = false;
      }
    }
    return $is_image;

  }
  function IsVideo($f)
  {
    $is_video = false;
    if(preg_match('#.ogv$#i',$f))
    {
      $is_video = true;
    }
    
    if(preg_match('#.ogg$#i',$f))
    {
      $ogg = new Ogg($f);
      $is_video = ($ogg->GetCodec() == 'theora' || $ogg->GetCodec()=='ishead');
    }


    if(preg_match('#.webm$#i',$f)){
      $is_video = true;
    }

    
    return $is_video;

  }
  
  function IsAudio($f)
  {
    $is_audio = false;
    
    if(preg_match('#.oga$#i',$f))
    {
      $is_audio = true;
    }
    
    if(preg_match('#.ogg$#i',$f))
    {
      $is_audio = true;
    }
    
    if($is_audio){
      $ogg = new Ogg($f);
      $is_audio = ($ogg->GetCodec() == 'vorbis');
    }
    
    return $is_audio;

  }
  
  
  
  
}


class Album {
  private $m_path='.';
  function GetPath()
  {
    return $this->m_path;
  }

  function GetParentPath(){
  	if($this->m_path == '.'){
		return;
    }
    return preg_replace('!^(.*)/([-a-zA-Z0-9_. ]+)$!','$1',$this->m_path);
  }
  
  function SetPath($path)
  {
    $this->m_path = $path;
  }

  function GetName()
  {
	return preg_replace('!^\./(.*)$!','$1',$this->m_path);
  }

  function GetMediaCount()
  {
    $mediaManager = new MediaManager();
    $medias = $mediaManager->GetMedias($this->m_path);
    return count($medias);

  }
  
  function GetImageCount()
  {
    return count($this->GetImages());
  }
  
  function GetVideoCount()
  {
    return count($this->VideoImages());
  }

  function GetTotalMediaCount()
  {
    $count = $this->GetMediaCount();
    $albumManager = new AlbumManager();
    $childAlbums = $this->GetChildAlbums();
    foreach($childAlbums as $album){
      $count += $album->GetTotalMediaCount();
    }
    return $count;
  }
  
  function GetTotalImageCount()
  {
    $count = $this->GetImageCount();
    $albumManager = new AlbumManager();
    $childAlbums = $this->GetChildAlbums();
    foreach($childAlbums as $album){
      $count += $album->GetImageCount();
    }
    return $count;
  }
  
  function GetTotalVideoCount()
  {
    $count = $this->GetVideoCount();
    $albumManager = new AlbumManager();
    $childAlbums = $this->GetChildAlbums();
    foreach($childAlbums as $album){
      $count += $album->GetVideoCount();
    }
    return $count;
  }

  function GetMedias()
  { 
    $mediaManager = new MediaManager();
    return $mediaManager->GetMedias($this->m_path);
  }
  
  function GetImages(){
    $medias = $this->GetMedias();
    $images = array();
    foreach($medias as $media){
      if($media->GetType() == 'image'){
        $images[] = $media;
      }
    }
    return $images;
  }

  function GetVideos(){
    $medias = $this->GetMedias();
    $videos = array();
    foreach($medias as $media){
      if($media->GetType() == 'video'){
        $videos[] = $media;
      }
    }
    return $videos;
  }

  function GetAudios(){
    $medias = $this->GetMedias();
    $audios = array();
    foreach($medias as $media){
      if($media->GetType() == 'audio'){
        $audios[] = $media;
      }
    }
    return $audios;
  }  

  
  function GetChildAlbums()
  {
    $albumManager = new AlbumManager();
    return $albumManager->GetAlbums($this->GetPath());
  }
  
  function GetDescription()
  {
    $out = '';
    $images = $this->GetImages();
    $videos = $this->GetVideos();
    $audios = $this->GetAudios();
    $albums = $this->GetChildAlbums();
    
    $texts = array();
             
    if(count($images)>0){
        $texts[] = count($images).' image'.(count($images)>1?'s':'');
    }
    
    if(count($videos)>0){
        $texts[] = count($videos).' video'.(count($videos)>1?'s':'');
    }
    
    if(count($audios)>0){
        $texts[] = count($audios).' musique'.(count($audios)>1?'s':'');
    }
    
    
    if(count($this->GetChildAlbums()) > 0) {
      $albumDesc = count($albums).' album'.(count($this->GetChildAlbums())>1?'s':'');
      if($this->GetTotalImageCount()-$this->GetImageCount() != 0){
        $albumDesc .= ' ('.$this->GetTotalMediaCount().' élément'.($this->GetTotalMediaCount()>1?'s':'').')';
      }
      $texts[] = $albumDesc;
    }
    
    if(count($texts) ==0)
    {
      $out = 'album vide';
    }else{
      for($i =0; $i < count($texts); $i++){
        $out.=$texts[$i];
        if($i < count($texts) -2){
          $out.=', ';
        }
        if($i == count($texts)-2){
          $out.=' et ';
        }
        
      }
    }
    
    return $out;
  }
  
  function GetParent(){
    $album = new Album();
    $album->SetPath($this->GetParentPath());
    return $album;
  }
  
  function IsLicence(){
    
    if(file_exists($this->GetPath().'/'.Config::GetInstance()->licenceFileName)){
      if($this->ReadLicence() == ''){
        return false;
      }else{
        return true;
      }
    }elseif($this->IsRootAlbum()){
      return false;
    }else{
      return $this->GetParent()->IsLicence();
    }
  }
  
  function GetLicence(){
    if(file_exists($this->GetPath().'/'.Config::GetInstance()->licenceFileName)){
      return $this->ReadLicence();
    }elseif($this->IsRootAlbum()){
      return '';
    }else{
      return $this->GetParent()->ReadLicence();
    }
  }
  
  function ReadLicence(){
    $licence = '';
    $file = fopen($this->GetPath().'/'.Config::GetInstance()->licenceFileName,"r");

    while ($line = fgets($file))
    {
      $licence .=$line;
    }

    fclose($file);
    
    return $licence;
  }

  function IsRootAlbum(){
    return ($this->GetPath() == '.');
  }
}


class AlbumManager {
  function GetAlbums($path)
  {
    $dir = opendir($path);
    $albums = array();

    while ($f = readdir($dir)) {
       if($f != '..' && $f !='.'  && is_dir($path.'/'.$f)) {
          $album = new Album();
          $album->SetPath($path.'/'.$f);
	  $albums[] = $album;
       }
    } 
    closedir($dir);
    return $albums;
  }
  
}


class DisplayManager {
  public $currentAlbum;
  public $childAlbumList;  
  function DisplayImagesPage($album)
  {
    $this->currentAlbum = $album;
    $this->childAlbumList = $album->GetChildAlbums();
    $this->PrintHtmlHeader();
    $this->PrintImagesPageHeader();
    $this->PrintAlbumsPageBody();
    $this->PrintImagesPageBody();
    $this->PrintFooter();
  }
  
  function DisplayLoginPage($album,$loginFail)
  {
    $this->currentAlbum = $album;
    $this->PrintHtmlHeader();
    $this->PrintLoginForm($loginFail);
    $this->PrintFooter();
  }
  
  function DisplayAccessRefusedPage($album){
    $this->currentAlbum = $album;
    $this->PrintHtmlHeader();
    $this->PrintAccessRefusedPageBody();
    $this->PrintFooter();
  }
  
  function DisplayHelpPage(){
    $this->PrintHtmlHeader();
    $this->PrintHelpPageBody();
    $this->PrintFooter();
  }
  
  function PrintHtmlHeader()
  {  
    $style = new Style();
    echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">'."\n";
    echo '<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >'."\n";
    echo '  <head>'."\n";
    echo '    <title>Shrew Gallery</title>'."\n";
    echo '    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />'."\n";
    echo '<style type="text/css">'."\n";
    echo $style->Generate();
    echo '</style>'."\n";
    echo '  </head>'."\n";
    echo '  <body>'."\n";
    echo '  <div id="page">'."\n";
    echo '<div id=top_menu>'."\n";
    
    if($this->currentAlbum && $this->currentAlbum->GetPath() != '.'){
            echo '  <a href="'.LinkManager::GetInstance()->GenerateParent().'" >Album parent</a> '."\n";
    }
    if(LoginManager::GetInstance()->GetCurrentLogin() != 'public')
    {
      echo '    <a href="'.LinkManager::GetInstance()->GenerateWant('logout').'" >Déconnection ('.LoginManager::GetInstance()->GetCurrentLogin().')</a>'."\n";
    }
    echo '</div>'."\n";
    echo '    <h1>Shrew gallery</h1>'."\n";
  }
  
  function PrintFooter()
  {
    echo '      <div id="footer">'."\n";
    echo '        <p id="copyright" ></p>Powered by <a href="http://shrew-gallery.b219.org" >Shrew-gallery v'.Config::GetInstance()->version.'</a> - Copyright (C) 2009 Frédéric Bertolus</p>'."\n";
    echo '        <p id="licence" >Shrew-gallery is free software: you can redistribute it and/or modify it under the terms of the GNU Affero General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.</p>'."\n";
    echo '        <p id="source" ></p>The source code can be found at the following URL : <a href="'.LinkManager::GetInstance()->GenerateWant('source').'">'.Config::GetInstance()->GetScriptName().'</a></p>'."\n";
    echo '      </div>'."\n";//div footer
    echo '    </div>'."\n";//div page
    echo '  </body>'."\n";
    echo '</html>';
  }
  
  function PrintImagesPageHeader()
  {
    $medias = $this->currentAlbum->GetMedias();
    if(count($medias)>0 || count($this->childAlbumList) > 0)
    { 
            echo '<p>Cet album contient ';
            echo $this->currentAlbum->GetDescription();
            echo '. ';
            if(file_exists($this->currentAlbum->GetPath().'/all.zip')){
                echo '<br /><br />Vous pouvez télécharger l\'intégralité de cet album en suivant ce lien : <a href='.$this->currentAlbum->GetPath().'/all.zip >all.zip</a>.';
            }
            echo '</p>'."\n";
    } else {
      echo '      <div  class="image-bloc">'."\n";
      echo '        Cet album est vide.'."\n";
      echo '      </div>'."\n";//div image
    }
  }
  
  function PrintImagesPageBody()
  {
    $medias = $this->currentAlbum->GetMedias();
    if($medias)
    {
      $start = 0;
      $count = 8;
      if(isset($_GET['start']))
      {
        $start = $_GET['start'];
      }
      
      if($start <0) { $start = 0;}
      if($start >=count($medias)) { $start = count($medias)-1;}
      
      
      if(isset($_GET['count']))
      {
        $count = $_GET['count'];
      }
      $end = $start+$count;
      
      if($end <0) { $end = 0;}
      if($end >count($medias)) { $end = count($medias);}
      
      
      echo '<p><form action="'.LinkManager::GetInstance()->Generate().'" method="get">Élements par page : <input name=start type=hidden value="'.$start.'"/><input name=path type=hidden value="'.$this->currentAlbum->GetPath().'"/><input type=text name=count size=2 value="'.$count.'"/> <input type=submit value=OK /></form></p>'."\n";
      
      for($index = $start; $index < $end; $index++)
      {
        // Print each media
        if($medias[$index]->GetType() == 'image')
        {
          $this->DisplayImage($medias,$index,$count,$start,$end);
        }
        
        if($medias[$index]->GetType() == 'video')
        {
          $this->DisplayVideo($medias,$index,$count,$start,$end);
        }
        
         if($medias[$index]->GetType() == 'audio')
        {
          $this->DisplayAudio($medias,$index,$count,$start,$end);
        }
        
      }
      
      if($this->currentAlbum->IsLicence()){
        echo '        <div class="licence">'."\n";
        echo '        <p>'.$this->currentAlbum->GetLicence().'</p>'."\n";
        echo '        </div>'."\n";
      }
      
    }
   
  }
  
  function DisplayImage($medias,$index,$count,$start,$end){
    $images = $medias;
    $image = $medias[$index];
        echo '      <div id="image-'.$index.'" class="image-bloc">'."\n";
        echo '        <div class="image-infos-bloc">'."\n";
        echo '        <div class="image-infos">'."\n";
        echo '          <h1>Image - '.($index+1).' sur '.count($images).'</h1>'."\n";
        echo '          <ul>'."\n";
        echo '           <li><a href="'.$image->GetPath().'" >Original</a></li>'."\n";
        echo '          </ul>'."\n";
        echo '        </div>'."\n";
        $this->DisplayControls($medias,$index,$count,$start,$end);//Metadatas
        $metadatas = $image->GetMetadatas();
        if($metadatas->count > 0){
          echo '        <div class="image-infos">'."\n";
          echo '          <h1>Métadonnées</h1>'."\n";
          echo '          <ul>'."\n";
          if($metadatas->date != '') {
            echo '           <li>'.$metadatas->date.'</li>'."\n";
          }
          if($metadatas->model != '') {
            echo '           <li>'.$metadatas->model.'</li>'."\n";
          }
          if($metadatas->focalLength != '') {
            echo '           <li>'.$metadatas->focalLength.'</li>'."\n";
          }
          if($metadatas->exposure != '') {
            echo '           <li>'.$metadatas->exposure.'</li>'."\n";
          }
          if($metadatas->focale != '') {
            echo '           <li>'.$metadatas->focale.'</li>'."\n";
          }
          if($metadatas->iso != '') {
            echo '           <li>'.$metadatas->iso.'</li>'."\n";
          }
          if($metadatas->flash == true) {
            echo '           <li>Flash</li>'."\n";
          }
          
          echo '          </ul>'."\n";
          echo '        </div>'."\n";
        }
         
        echo '        </div>'."\n";    
        //Display image
        echo '        <div class="image">'."\n";
		$width = $image->GetThumb()->GetWidth();
        echo '        <img src="'.$image->GetThumb()->GetPath().'" width='.($width>800?'800':$width).'px />'."\n";
        echo '        </div>'."\n";
        echo '      </div>'."\n";//div image
  }


function DisplayVideo($medias,$index,$count,$start,$end){
    $images = $medias;
    $video = $medias[$index];
        echo '      <div id="image-'.$index.'" class="image-bloc">'."\n";
        echo '        <div class="image-infos-bloc">'."\n";
        echo '        <div class="image-infos">'."\n";
        echo '          <h1>Video - '.($index+1).' sur '.count($images).'</h1>'."\n";
        echo '          <ul>'."\n";
        echo '           <li><a href="'.$video->GetPath().'" >Original</a></li>'."\n";
        echo '          </ul>'."\n";
        echo '        </div>'."\n";
        $this->DisplayControls($medias,$index,$count,$start,$end);
        echo '        </div>'."\n";    
        //Display video
        echo '        <div class="video">'."\n";
        echo '        <video controls=true src="'.$video->GetPath().'">Votre navigateur ne respecte pas suffisement les standards. Vous pouvez néanmoins téléchager la vidéo ici : <a href="'.$video->GetPath().'" >Original</a></video>'."\n";
        echo '        </div>'."\n";
        echo '      </div>'."\n";//div video
  }
  
  function DisplayAudio($medias,$index,$count,$start,$end){
    $images = $medias;
    $audio = $medias[$index];
        echo '      <div id="image-'.$index.'" class="image-bloc">'."\n";
        echo '        <div class="image-infos-bloc">'."\n";
        echo '        <div class="image-infos">'."\n";
        echo '          <h1>Musique - '.($index+1).' sur '.count($images).'</h1>'."\n";
        echo '          <ul>'."\n";
        echo '           <li><a href="'.$audio->GetPath().'" >Original</a></li>'."\n";
        echo '          </ul>'."\n";
        echo '        </div>'."\n";
        $this->DisplayControls($medias,$index,$count,$start,$end);
         
        echo '        </div>'."\n";    
        //Display audio
        echo '        <div class="video">'."\n";
        echo '        <audio controls=true src="'.$audio->GetPath().'">Votre navigateur ne respecte pas suffisement les standards. Vous pouvez néanmoins téléchager ce fichier ici : <a href="'.$audio->GetPath().'" >Original</a></audio>'."\n";
        echo '        </div>'."\n";
        echo '      </div>'."\n";//div video
  }


  function DisplayControls($medias,$index,$count,$start,$end){
    echo '        <div class="image-infos">'."\n";
        echo '          <ul>'."\n";
        echo '           <li><a href="#page" >Haut de la page</a></li>'."\n";
        if($index>0){
          echo '           <li><a href="#image-'.($index-1).'" >Élément précédent</a></li>'."\n";
        }
        if($index<($end-1)){
          echo '           <li><a href="#image-'.($index+1).'" >Élément suivant</a></li>'."\n";
        }
        echo '           <li><a href="#footer" >Bas de la page</a></li>'."\n"; 
        echo '          </ul>'."\n";
        echo '          <ul>'."\n";
        
        if($start>0){
          echo '           <li><a href="'.LinkManager::GetInstance()->Generate().'&count='.$count.'" >Première page</a></li>'."\n";
          echo '           <li><a href="'.LinkManager::GetInstance()->Generate().'&start='.($start-$count).'&count='.$count.'" >Page précédente</a></li>'."\n";
        }
        if($end<count($medias)){
          echo '           <li><a href="'.LinkManager::GetInstance()->Generate().'&start='.($start+$count).'&count='.$count.'" >Page suivante</a></li>'."\n";
          echo '           <li><a href="'.LinkManager::GetInstance()->Generate().'&start='.(count($medias)-$count).'&count='.$count.'" >Dernière page</a></li>'."\n"; 
        }
        echo '          </ul>'."\n";
        
        
        echo '        </div>'."\n";
      }

  function PrintAlbumsPageBody()
  {
        foreach($this->childAlbumList as $album){
        echo '  <div class=album>'."\n";
        echo '  <p>Album <a href="'.LinkManager::GetInstance()->GeneratePath($album->GetPath()).'" >'.$album->GetName().'</a> ('.$album->GetDescription().')'.(LoginManager::GetInstance()->IsAccessAllowed($album)?'':' - Accès refusé').'</p>'."\n";
        echo '  </div>'."\n";
        }
  }

     
  function DisplaySource()
  {
    header( "Content-Type: text/plain" );
    $source = fopen("index.php","r");

    while ($ligne = fgets($source))
    {
      echo $ligne;
    }

    fclose($source);
  }

  function PrintLoginForm($loginFail)
  {
    echo '      <div  class="login-bloc">'."\n";
    echo '        <form action="'.LinkManager::GetInstance()->GenerateWant('login').'" method="post" >'."\n";
    echo '          <ul>'."\n";
    echo '            <li>Identifiant : <input name=login type=text /></li>'."\n";
    echo '            <li>Mot de passe : <input name=password type=password /></li>'."\n";
    echo '            <li><input type=submit value="Valider" /></li>'."\n";
    if($loginFail){
     echo '            <li class=error >Identifiant ou mot de passe incorrect. Accès refusé.</li>'."\n";
    }
    echo '          </ul>'."\n";
    echo '        </form>'."\n";
    echo '      </div>'."\n";//div image
  }
  
  function PrintAccessRefusedPageBody()
  {
    echo '      <div  class="login-bloc">'."\n";
    echo '        <p>'."\n";
    echo '          Accès refusé pour l\'utilisateur « '.LoginManager::GetInstance()->GetCurrentLogin().' ». Essayer un autre compte ou contacter l\'administrateur.'."\n";
    echo '        </p>'."\n";
    echo '      </div>'."\n";//div image
  }
  
  function PrintHelpPageBody()
  {  
    echo '      <h1>Documentation - Shrew-gallery v'.Config::GetInstance()->version.'</h1>'."\n";
    echo '      <h2>Installation</h2>'."\n";
    echo '        <p>'."\n";
    echo '          Si vous êtes arrivé ici, c\'est que Shrew-gallery est déjà installé !'."\n";
    echo '        </p>'."\n";
  }
}


class Shrew {
  function Run()
  {
  	//Load config
    Config::SetInstance(new Config());
    Config::GetInstance()->Load();
    
    $albumManager = new AlbumManager();      
    $album = new Album();
    $album->SetPath(Config::GetInstance()->GetPath());
    
    LinkManager::SetInstance(new LinkManager());
    LinkManager::GetInstance()->SetAlbum($album);
      
    
    $displayManager = new DisplayManager();
	  
    //Create Login Manager
    $loginManager = new LoginManager();
    LoginManager::SetInstance($loginManager);
    $loginManager->Load();
    $loginFail = false;
    if($loginManager->WantLogin())
    {
       $loginFail = !$loginManager->TryLogin();
       if(!$loginFail)
       {
         header('location: '.LinkManager::GetInstance()->Generate());
       }
    }
    
    if($loginManager->WantLogout())
    {
       $loginManager->Logout();
    }
    
    
    if(isset($_GET['want']) and $_GET['want']== 'logo')
    {
      $logo = new Logo();
      $logo->Generate();
      return;
    }
    elseif(isset($_GET['want']) and $_GET['want']== 'source')
    {
      $displayManager->DisplaySource();
    }
    elseif(isset($_GET['want']) and $_GET['want']== 'help')
    {
      $displayManager->DisplayHelpPage();
    }
    else 
    {
    
      
      if($loginManager->IsAccessAllowed($album)){
        $displayManager->DisplayImagesPage($album);
      }else{
        if($loginManager->IsLogged()){
          $displayManager->DisplayAccessRefusedPage($album);
        }else{
          $displayManager->DisplayLoginPage($album,$loginFail);
        }
      }
    }
    
  }
}


$application = new Shrew();
  
$application->Run();
?>
