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
      margin : 35px;
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
    
    .image-bloc
    { margin : 15px;
      background-color : rgb(20,20,20);
      border : 1px solid rgb(30,30,30);
      padding : 10px;
    }
    
    .image-infos-bloc
    {
      float:left;
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
    
    #footer
    { 
      margin : 15px;
      padding : 10px;
      background-color : rgb(15,15,15);
      border : 1px solid rgb(25,25,25);
      text-align : center;
    }
    
    #logout
    {
      float : right;
    }
    
    .image-infos h1
    {
      text-align : center;
      font-size : 1.0em;
      
    }
    
    .error
    {
      color : red;
    }
    ';
  }
}



class DisplayManager {
 
  function DisplaySitePage()
  {
    $this->PrintHtmlHeader();
    $this->PrintBody();
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
    echo '  <div id="page">
'."\n";
    echo '    <h1>Shrew gallery</h1>'."\n";
  }
  
  function PrintFooter()
  {
    echo '      <div id="footer">'."\n";
    echo '        <p id="copyright" > Copyright (C) 2009 Frédéric Bertolus</p>'."\n";
    echo '        <p id="licence" >This is free software: you can redistribute it and/or modify it under the terms of the GNU Affero General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.</p>'."\n";
    echo '        <p id="source" ></p>The source code can be found at the following URL : <a href="index.php?want=source">index.php</a></p>'."\n";
    echo '      </div>'."\n";//div footer
    echo '    </div>'."\n";//div page
    echo '    <script type="text/javascript">';
    echo '    var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");';
    echo '    document.write(unescape("%3Cscript src=\'" + gaJsHost + "google-analytics.com/ga.js\' type=\'text/javascript\'%3E%3C/script%3E"));';
    echo '</script>';
    echo '<script type="text/javascript">';
    echo 'try {';
    echo 'var pageTracker = _gat._getTracker("UA-3378479-4");';
    echo 'pageTracker._trackPageview();';
    echo '} catch(err) {}</script>';
    echo '  </body>'."\n";
    echo '</html>';
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

  function PrintBody()
  {
    echo '      <div  class="image-bloc">'."\n";
    echo '       <p>Shrew gallery est un moteur de galerie d\'images sur internet utilisant PHP. Shrew gallery est un logiciel libre. Il existe de nombreuses « web gallery »  mais celle-ci se veux être extrêmement simple à mettre en place pour les personnes disposant d\un hébergement mutialisé ou d\'un serveur dédié :  </p>'."\n";
    echo '       <ul>'."\n";
    echo '         <li>Créez un dossier est mettez-y vos photos</li>'."\n";
    echo '         <li>Télécharger le fichier « index.php » de shrew-gallery et copiez le dans votre dossier</li>'."\n";
    echo '         <li>Ça y est ! Ça marche !</li>'."\n";
    echo '       </ul>'."\n";
    echo '       <h2>Fonctionnalités</h2>'."\n";

    echo '       <p>Shrew gallery ne possède pas beaucoup de fonctionalités. En fait, il intègre pour le moment seulement l\essentiel : </p>'."\n";
    echo '       <ul>'."\n";
    echo '         <li>Affichage des images JPEG contenues dans le dossier.</li>'."\n";
    echo '         <li>Présentation des images par pages et navigations basique.</li>'."\n";
    echo '         <li>Controle d\'accès facultatif</li>'."\n";
    echo '         <li>Mise à disposition du code source des versions modifiés pour faciliter le respect de la licence</li>'."\n";
    echo '       </ul>'."\n";

    echo '       <p>Shrew gallery n\'est pas :</p>'."\n";
    echo '       <ul>'."\n";
    echo '         <li>Sécurisé : il est quasiment certains que des failles de sécurités se cachent dans ce logiciel. N\'utilisez pas ce logiciel si vous données sont sensibles</li>'."\n";
    echo '         <li>Optimisé : les images sont téléchargées sans passer par des miniatures. Le temps de téléchargement peut donc être long pour des images de grandes taille. N\'utiliser pas ce logiciel si vous voulez une gallerie très réactive et n\'utilisant que peu de bande passante.</li>'."\n";
    echo '       </ul>'."\n";
    echo '       <h2>Démonstration</h2>'."\n";
    echo '       <p>Deux galleries de démonstration sont à disposition pour avoir un aperçu rapide des fonctionnalités :</p>'."\n";
    echo '       <ul>'."\n";
    echo '         <li>Une gallerie publique : <a href="demo" >demo</a></li>'."\n";
    echo '         <li>Une gallerie privé. L\'identifiant et le mot de passe sont tous les deux « test » : <a href="protected_demo" >protected_demo</a></li>'."\n";
    echo '       </ul>'."\n";
    echo '       <h2>Installation</h2>'."\n";
    echo '       <h3>Téléchargement du code source</h3>'."\n";
    echo '       <p>Vous pouvez télécharger le code source de shrew-gallery via le lien suivant : <a href="data/shrew-gallery_1.0.1.tar.gz" >shrew-gallery_1.0.1.tar.gz</a></p>'."\n";
    echo '       <h3>Déploiement</h3>'."\n";
    echo '       <ul>'."\n";
    echo '       <li>Commencez par créer un dossier accessible par votre serveur web.</li>'."\n";
    echo '       <li>Ajoutez vos photos au dossier.</li>'."\n";
    echo '       <li>Zippez l\'ensemble des photos de l\'album en un fichier nommé « all.zip » (« zip all.zip *.jpg » par exemple).</li>'."\n";
    echo '       <li>Extraire l\'archive contenant le code source (« tar xvzf shrew-gallery_1.0.1 » par exemple).</li>'."\n";
    echo '       <li>Copier le fichier « index.php » situé dans le dossier « out » du code source vers le dossier contenant vos photos.</li>'."\n";
    echo '       </ul>'."\n";
    echo '       <h3>Configuration des droits d\'accés</h3>'."\n";
    echo '       <p>Si vous voulez restraindre l\'accès à votre galerie, créez dans le même dossier que vos photos un fichier « access.php ». Éditez ce  fichier et à l\'intérieur de balise PHP, ajouter des lignes suivant cette syntaxe :</p>'."\n";
    echo '       <p style="font-family: Courier;">//access login motdepasse</p>'."\n";
    echo '       <p>Un exemple est présent dans l\'archive contenant le code source dans le dossier « examples »</p>'."\n";
    echo '       <h2>Bugs et contributions</h2>'."\n";
    echo '       <p>Il est possible que des bugs trainent. Si vous en trouvez, vous pouvez me les reporter à l\'adresse fredb219@gmail.com. Les contributions sont aussi bienvenues.</p>'."\n";
    echo '       <h2>Licence</h2>'."\n";
    echo '       <p>Shrew gallery est distribué sous licence GNU Affero General Public Licence version 3 ou plus. Vous pouvez consulter cette licence à l\'adresse suivante : <a href="http://www.fsf.org/licensing/licenses/agpl-3.0.html" >http://www.fsf.org/licensing/licenses/agpl-3.0.html</a></p>'."\n";
    echo '       <h2>Auteurs</h2>'."\n";
    echo '       <ul>'."\n";
    echo '       <li>FredB219 : Programmation</li>'."\n";
    echo '       <li>Yekcim : Mascotte/Logo</li>'."\n";
    echo '       </ul>'."\n";
    echo '      </div>'."\n";//div image
  }
  
}


class Shrew {
  function Run()
  {
    
    $displayManager = new DisplayManager();
	 
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
    else
    {
      $displayManager->DisplaySitePage();
    }
    
  }
}


$application = new Shrew();
  
$application->Run();
?>
