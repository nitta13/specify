<!DOCTYPE html>
<html>
<head>
   <title>Contoh Kasus Spesifik CSS !important</title>
   <style type="text/css">
            p  {
               color:blue !important;
               }
            div p {
               color:green;
               }
            #aaa{
               color:orange;
               }
            body div p {
               color:yellow;
               }
            div p.kalimat {
               color:silver;
               }
    </style>
</head>

<body>
   <div>
    <p id="aaa">
      Sedang Belajar CSS...
    </p>
   </div>
</body>
</html>