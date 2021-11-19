
        <div class="admin-footer">
            <small>&copy copyright skybird. All right reserved</small>
        </div>
    </div>
    <!-- right content-->
    <!-- js code for dasboard -->
    <script>
        dcmchild = document.getElementsByClassName("dcm-childs");
        dcp = document.getElementsByClassName("dc-p");
        dch = document.getElementsByClassName("dc-h1");
        dci = document.getElementsByClassName("dashborad-card-icon");
        dcmchild[0].addEventListener("mouseover", function(){
            dcmchild[0].style.backgroundColor = "var(--main-color)";
            dcp[0].style.color = "#fff";
            dch[0].style.color = "#fff";
            dci[0].style.color = "#fff";

        });
        dcmchild[0].addEventListener("mouseout", function(){
            dcmchild[0].style.backgroundColor = "#fff";
            dcp[0].style.color = "var(--primary-color)";
            dch[0].style.color = "#000";
            dci[0].style.color = "var(--design-color)";
        });
        dcmchild[1].addEventListener("mouseover", function(){
            dcmchild[1].style.backgroundColor = "var(--main-color)";
            dcp[1].style.color = "#fff";
            dch[1].style.color = "#fff";
            dci[1].style.color = "#fff";

        });
        dcmchild[1].addEventListener("mouseout", function(){
            dcmchild[1].style.backgroundColor = "#fff";
            dcp[1].style.color = "var(--primary-color)";
            dch[1].style.color = "#000";
            dci[1].style.color = "var(--design-color)";
        });
        dcmchild[2].addEventListener("mouseover", function(){
            dcmchild[2].style.backgroundColor = "var(--main-color)";
            dcp[2].style.color = "#fff";
            dch[2].style.color = "#fff";
            dci[2].style.color = "#fff";

        });
        dcmchild[2].addEventListener("mouseout", function(){
            dcmchild[2].style.backgroundColor = "#fff";
            dcp[2].style.color = "var(--primary-color)";
            dch[2].style.color = "#000";
            dci[2].style.color = "var(--design-color)";
        });
        dcmchild[3].addEventListener("mouseover", function(){
            dcmchild[3].style.backgroundColor = "var(--main-color)";
            dcp[3].style.color = "#fff";
            dch[3].style.color = "#fff";
            dci[3].style.color = "#fff";

        });
        dcmchild[3].addEventListener("mouseout", function(){
            dcmchild[3].style.backgroundColor = "#fff";
            dcp[3].style.color = "var(--primary-color)";
            dch[3].style.color = "#000";
            dci[3].style.color = "var(--design-color)";
        });

    </script>
    <!-- js code for site options start-->
    <script>
        
        let smu = document.getElementById("sub-menu-icon-up");
        let smd= document.getElementById("sub-menu-icon-down");
        let d= document.getElementById("dropdown");
        smd.addEventListener("click", function(){
            d.style.display = "block";
            smd.style.display = "none";
            smu.style.display ="inline-block";
        });
        smu.addEventListener("click", function(){
            d.style.display = "none";
            smd.style.display = "inline-block";
            smu.style.display ="none";
        });
    </script>
    <!-- js code for site options end-->
    <!-- js code for logo,title,socialmedia,copyright start -->
        <script>
        let d= document.getElementById("dropdown");
        let down = document.getElementById("down");
        let up = document.getElementById("up");
        function upicon(){
            d.style.display = "none";
            up.style.display = "none";
            down.style.display = "inline-block";
        }
        function downicon(){
            up.style.display = "inline-block";
            down.style.display = "none";
            d.style.display = "block";
            
        }
    </script>
    <!-- js code for logo,title,socialmedia,copyright end -->
    <!-- navbar icon js -->
    <script src="js/function.js"></script>
    <!-- navbar icon js -->
</body>
</html>