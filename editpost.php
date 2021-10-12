<!-- submit header -->
<?php include('inc/second-header.php')?>
  <!-- banner section start -->
  <div class="submit-banner banner">
            <div class="banner-overlay">
                <h1 class="banner-header">Add Property</h1>
                <p> <a href="#">Home</a>  > Add Property</p>
            </div>
        </div>
    <!-- banner section end -->
    </header>
<!-- submit header -->
<?php 
    $login = Session::get("userlogin");
    if ($login == false) {
        header("location:login.php");
    }
?>

<!-- php -->
<?php
    if(!isset($_GET['id']) || $_GET['id'] == NULL){
        header("Location: 404.php");
    }else{
        $id = $_GET['id'];
    }
?>
<!-- php -->


<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])){
        $updatePost = $addp->postUpdate($_POST, $_FILES, $id);
    }
?>

<!-- / basic information form start/ -->
<section class="form-section">
    <span class="basic-information">Basic Information</span>

            <?php
                    $query = "SELECT * FROM tbl_post where id = '$id'";
                    $post = $db->select($query);
                    if($post){
                            while($result = $post->fetch_assoc()){
                ?>




    <form action="" method="POST" enctype = "multipart/form-data">
        <div id="form-one">
            <div class="form-div">


                <div class="input-container title-container">
                <?php
                            // if(isset($submitPost)){
                            //     echo $submitPost;
                            // }
                        ?>
                    <legend>Proparty Title <span class="starsign">*</span></legend>
                    <input type="text" name="title" id="#" value="<?php echo $result['title']; ?>" required>
                </div>
                <div class="bedbath">
                    <div class="input-container bedbath-container">
                        <legend>Bedroom <span class="starsign">*</span></legend>
                        <input type="text" name="bedroom" value="<?php echo $result['bedroom']; ?>" id="#" required>
                    </div>
                    <div class="input-container bedbath-container">
                        <legend>Bathroom <span class="starsign">*</span></legend>
                        <input type="text" name="bathroom" value="<?php echo $result['bathroom']; ?>" id="#" required>
                    </div>
                </div>
                <div class="input-container upload-container">
                <legend>Previous Image </legend>
                <img src="<?php echo $result['image']; ?>" class="previous-image" alt="">
                    <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
                    <div class="file-upload">
                    <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Add new Image</button>
                    <div class="image-upload-wrap">
                        <input class="file-upload-input" name="image" id="file-upload-input" type='file' onchange="readURL(this);" accept="image/*"/>
                        <div class="drag-text">
                            <i class="fas fa-upload upload-icon"></i>
                            <legend class="upload-photo-text" id="upt">Drag or Upload new Photo</legend>
                            <legend class="clean-photo" id="cp">Its must be a clean photo</legend>
                        </div>
                    </div>
                    <div class="file-upload-content">
                        <img class="file-upload-image" src="#" alt="your image" />
                        <div class="image-title-wrap">
                        <button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
                        </div>
                    </div>
                    </div>
                    <!-- ----------- -->
                </div>
                <!-- division district thana start -->
                
                <div class="srh">
                    <div class="input-container srh-container">
                        <label for="">Division <span class="starsign">*</span></label>
                        <select id="cars-select" name="division" class="district-thana-dropdown" onchange="updateModels()" required>
                        <option disabled selected>--- Division ---</option>
                        <option selected = "selected" value="" style="display:none"><?php echo $result['division']; ?></option>
                        </select>
                    </div>
                    <div class="input-container srh-container">
                        <label for="">District <span class="starsign">*</span></label>
                        <select id="models-select" name="district" class="district-thana-dropdown" onchange="updateConfigurations()" required>
                        <option value="" disabled selected>--- District ---</option>
                        <option selected = "selected" value="" style="display:none"><?php echo $result['district']; ?></option>

                        </select>
                    </div>
                    <div class="input-container srh-container">
                        <label for="">Thana <span class="starsign">*</span></label>
                        <select id="configurations-select" name="thana" class="district-thana-dropdown" required>
                            <option value="" disabled selected>--- Thana ---</option>
                            <option selected = "selected" value="" style="display:none"><?php echo $result['thana']; ?></option>
                        </select> 
                    </div>
                </div>
                <script src="function.js"></script>
                <script>
                /**
                 * Helper function for creating car
                 **/
                function createCar(name, id) {
                return {
                    name: name,
                    id: id,
                };
                }

                /**
                 * Helper function for creating model
                 **/
                function createModel(name, id, car) {
                return {
                    name: name,
                    id: id,
                    car: car,
                };
                }

                /**
                 * Helper function for creating configuration
                 **/
                function createConfiguration(name, id, model) {
                return {
                    name: name,
                    id: id,
                    model: model,
                };
                }

                /**
                 * Removes all options but the first value in a given select
                 * and than selects the only remaining option
                 **/
                function removeOptions(select) {
                while (select.options.length > 1) {                
                    select.remove(1);
                }
                
                select.value = "";
                }

                /**
                 * Adds given options to a given select
                 **/
                function addOptions(select, options) {
                console.log(select, options)
                options.forEach(function(option) {
                    select.options.add(new Option(option.name, option.id));
                });
                }

                /**
                 * Select elements references
                 **/
                var carsSelect = document.getElementById('cars-select');
                var modelsSelect = document.getElementById('models-select');
                var configurationSelect = document.getElementById('configurations-select');

                /**
                 * Available Division
                 **/
                var cars = [
                createCar('Barisal', 'barisal'),
                createCar('Chittagong', 'chittagong'),
                createCar('Dhaka', 'dhaka'),
                createCar('Khulna', 'khulna'),
                createCar('Mymensingh', 'mymensingh'),
                createCar('Rajshahi', 'rajshahi'),
                createCar('Sylhet', 'sylhet'),
                createCar('Rangpur', 'rangpur'),
                ];

                /**
                 * Available District
                 **/
                var models = [
                createModel('Barisal', 'barisal', 'barisal'),
                createModel('Barguna', 'barguna', 'barisal'),
                createModel('Bhola', 'bhola', 'barisal'),
                createModel('Brahmanbaria', 'brahmanbaria', 'chittagong'),
                createModel('Comilla', 'comilla', 'chittagong'),
                createModel('Chandpur', 'chandpur', 'chittagong'),
                createModel('Dhaka', 'dhaka', 'dhaka'),
                createModel('Gazipur', 'gazipur', 'dhaka'),
                createModel('Kishoreganj', 'kishoreganj', 'dhaka'),
                ];

                /**
                 * Available Thana
                 **/
                var configurations = [
                createConfiguration('Barisal thana 1', 'barisalth1', 'barisal'),
                createConfiguration('Barisal thana 2', 'barisalth2', 'barisal'),
                createConfiguration('Barguna thana 1', 'bargunath1', 'barguna'),
                createConfiguration('Barguna thana 1', 'bargunath2', 'barguna'),
                createConfiguration('Matlab', 'Matlab', 'comilla'),
                ];


                /**
                 * Updates District
                 **/
                function updateModels() {
                var selectedCar = carsSelect.value;
                var options = models.filter(function(model) {
                    return model.car === selectedCar;
                });
                
                removeOptions(modelsSelect);
                removeOptions(configurationSelect);
                addOptions(modelsSelect, options);
                }

                /**
                 * Updates Thana
                 */
                function updateConfigurations() {
                var selectedModel = modelsSelect.value;
                var options = configurations.filter(function(configuration) {
                    return configuration.model === selectedModel;
                });
                
                removeOptions(configurationSelect);
                addOptions(configurationSelect, options);
                }

                /**
                 * Adds options to Division select
                 **/
                addOptions(carsSelect, cars);
                </script>
                <!-- division district thana end -->
                <div class="srh">
                    <div class="input-container srh-container">
                        <legend>Sector No <span class="optional">(optional)</span></legend>
                        <input type="text" name="sectorno" value="<?php echo $result['sectorno']; ?>" id="#">
                    </div>
                    <div class="input-container srh-container">
                        <legend>Road No <span class="optional">(optional)</span></legend>
                        <input type="text" name="roadno" value="<?php echo $result['roadno']; ?>" id="#">
                    </div>
                    <div class="input-container srh-container">
                        <legend>House No <span class="optional">(optional)</span></legend>
                        <input type="text" name="houseno" value="<?php echo $result['houseno']; ?>" id="#">
                    </div>
                </div>
                <div class="input-container">
                    <legend>Address <span class="starsign">*</span></legend>
                    <input type="text" name="address" id="#" value="<?php echo $result['address']; ?>" required>
                </div>
                <div class="input-container">
                    <legend>Price <span class="starsign">*</span></legend>
                    <input type="text" name="price" id="#" value="<?php echo $result['price']; ?>" required>
                </div>
                <div class="input-container">
                    <legend>Google Map Link<span class="optional">(optional)</span></legend>
                    <input type="text" name="map" value="<?php echo $result['map']; ?>" id="#">
                </div>
                <div class="input-container">
                <legend>Description<span class="starsign">*</span></legend>
                   <textarea name="description" id="" class="description-area" required><?php echo $result['description']; ?></textarea>
                </div>
                <div class="input-container">
                    <input type="submit" name="update"  class="Submit" style="top: 40px;left: 45%;transform: translate(-50%);" value="Update"/>
                            
                </div>
            </div>
            
        </div>
    </form>
    <?php
            }
        }
        ?>
</section>

<!-- /form end/ -->

<!-- footer -->
<?php include('inc/footer.php') ?>
<!-- footer -->

    <!-- javascript for upload photo file-->
<script>
        function readURL(input) {
        if (input.files && input.files[0]) {

            var reader = new FileReader();

            reader.onload = function(e) {
            $('.image-upload-wrap').hide();

            $('.file-upload-image').attr('src', e.target.result);
            $('.file-upload-content').show();

            $('.image-title').html(input.files[0].name);
            };

            reader.readAsDataURL(input.files[0]);

        } else {
            removeUpload();
        }
        }

        function removeUpload() {
        $('.file-upload-input').replaceWith($('.file-upload-input').clone());
        $('.file-upload-content').hide();
        $('.image-upload-wrap').show();
        }
        $('.image-upload-wrap').bind('dragover', function () {
            $('.image-upload-wrap').addClass('image-dropping');
        });
        $('.image-upload-wrap').bind('dragleave', function () {
            $('.image-upload-wrap').removeClass('image-dropping');
        });
    </script>
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
</body>
</html>