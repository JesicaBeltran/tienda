<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
            
<style>
.header,
.footer {
    width: 100%;
    text-align: center;
    position: fixed;
}
.header {
    top: 0px;
    border-bottom: 2px solid #30475e;
}
.footer {
    bottom: 0px;
    border-top: 2px solid #30475e;
}
.pagenum:before {
    content: counter(page);
}
h3{
    color:#30475e;
}
</style>
</head>
<body>
<div class="header">
 
<img id="logo" src="https://ieslamarisma.net/proyectos/2020/jesicabeltran/tienda/public/imagenes/logo.png" class="d-inline-block align-top" width="110" height="60">

</div>
<div style="margin-top:100px;" >
@yield('cuerpo')
</div>
<div class="footer">
    Página <span class="pagenum"></span>
</div>
</body>
</html>

