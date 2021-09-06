<!-- property header -->
<?php include('inc/second-header.php')?>
<!-- property header -->
    <main>
        <h1>404</h1>
    </main>

<!-- // -->
<div style="margin:50px"></div>
<!-- // -->
<!-- footer -->
<?php include('inc/footer.php') ?>
<!-- footer -->

           <!-- animation icon js -->
           <script>
            dt = document.getElementById("navchild5-top");
            dm = document.getElementById("navchild5-middle");
            db = document.getElementById("navchild5-bottom");
            dd = document.getElementsByClassName("dropdown");
            pa = document.getElementById("p");
            function myFunction(x) {
            document.getElementById("navchild5").addEventListener("click",function(){
            if(dt.style.transform === "rotate(0deg)"){
                dt.style.transform="rotate(45deg)";
                dt.style.position="relative";
                dt.style.top="4px";
                dm.style.display="none";
                db.style.transform="rotate(135deg)";
                db.style.position="relative";
                db.style.top="-4px";
                dd[0].style.display = "block";
            }else{
                dt.style.transform="rotate(0deg)";
                dt.style.position="static";
                dm.style.display="block";
                db.style.transform="rotate(0deg)";
                db.style.position="static";
                dd[0].style.display="none";
            }
        })
        if (x.matches) { // If media query matches
                    dd[0].style.display = "none";
                } else {
                dd[0].style.display = "none";
                dt.style.transform="rotate(0deg)";
                dt.style.position="static";
                dm.style.display="block";
                db.style.transform="rotate(0deg)";
                db.style.position="static";
                dd[0].style.display="none";
                }
        }
    
        var x = window.matchMedia("(min-width: 769px)")
        myFunction(x)
        x.addListener(myFunction)
        </script>
        <!-- button overlay script -->
    <script>
        function openSearch() {
          document.getElementById("myOverlay").style.display = "block";
        }
        
        function closeSearch() {
          document.getElementById("myOverlay").style.display = "none";
        }
    </script>
</body>
</html>