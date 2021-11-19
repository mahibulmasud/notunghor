<!-- submit header -->
<?php include('inc/second-header.php')?>
  <!-- banner section start -->
  <div class="submit-banner banner">
            <div class="banner-overlay">
                <h1 class="banner-header">Edit Property</h1>
                <p> <a href="index.php">Home</a>  > Add Property</p>
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
                        if (isset($updatePost)) {
                            echo $updatePost;
                        }
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
                function createDivision(name, id) {
                return {
                    name: name,
                    id: id,
                };
                }

                /**
                 * Helper function for creating model
                 **/
                function createDistrict(name, id, car) {
                return {
                    name: name,
                    id: id,
                    car: car,
                };
                }

                /**
                 * Helper function for creating configuration
                 **/
                function createUpazila(name, id, model) {
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
                createDivision('Barisal', 'barisal'),
                createDivision('Chittagong', 'chittagong'),
                createDivision('Dhaka', 'dhaka'),
                createDivision('Khulna', 'khulna'),
                createDivision('Rajshahi', 'rajshahi'),
                createDivision('Rangpur', 'rangpur'),
                createDivision('Sylhet', 'sylhet'),
                ];

                /**
                 * Available District
                 **/
                var models = [
                    createDistrict("Bagerhat", "bagerhat", "khulna"),
                    createDistrict("Bandarban", "bandarban", "chittagong"),
                    createDistrict("Barguna", "barguna", "barisal"),
                    createDistrict("Barisal", "barisal", "barisal"),
                    createDistrict("Bhola", "bhola", "barisal"),
                    createDistrict("Bogra", "bogra", "rajshahi"),
                    createDistrict("Brahmanbaria", "brahmanbaria", "chittagong"),
                    createDistrict("Chandpur", "chandpur", "chittagong"),
                    createDistrict("Chittagong", "chittagong", "chittagong"),
                    createDistrict("Chuadanga", "chuadanga", "khulna"),
                    createDistrict("Comilla", "comilla", "chittagong"),
                    createDistrict("Coxs Bazar", "coxs bazar", "chittagong"),
                    createDistrict("Dhaka", "dhaka", "dhaka"),
                    createDistrict("Dinajpur", "dinajpur", "rangpur"),
                    createDistrict("Faridpur", "faridpur", "dhaka"),
                    createDistrict("Feni", "feni", "chittagong"),
                    createDistrict("Gaibandha", "gaibandha", "rangpur"),
                    createDistrict("Gazipur", "gazipur", "dhaka"),
                    createDistrict("Gopalganj", "gopalganj", "dhaka"),
                    createDistrict("Habiganj", "habiganj", "sylhet"),
                    createDistrict("Jamalpur", "jamalpur", "dhaka"),
                    createDistrict("Jessore", "jessore", "khulna"),
                    createDistrict("Jhalokati", "jhalokati", "barisal"),
                    createDistrict("Jhenaida", "jhenaida", "khulna"),
                    createDistrict("Joypurhat", "joypurhat", "rajshahi"),
                    createDistrict("Khagrachhari", "khagrachhari", "chittagong"),
                    createDistrict("Khulna", "khulna", "khulna"),
                    createDistrict("Kishoreganj", "kishoreganj", "dhaka"),
                    createDistrict("Kurigram", "kurigram", "rangpur"),
                    createDistrict("Kushtia", "kushtia", "khulna"),
                    createDistrict("Lakshmipur", "lakshmipur", "chittagong"),
                    createDistrict("Lalmonirhat", "lalmonirhat", "rangpur"),
                    createDistrict("Madaripur", "madaripur", "dhaka"),
                    createDistrict("Magura", "magura", "khulna"),
                    createDistrict("Manikganj", "manikganj", "dhaka"),
                    createDistrict("Meherpur", "meherpur", "khulna"),
                    createDistrict("Moulvibazar", "moulvibazar", "sylhet"),
                    createDistrict("Munshiganj", "munshiganj", "dhaka"),
                    createDistrict("Mymensingh", "mymensingh", "dhaka"),
                    createDistrict("Naogaon", "naogaon", "rajshahi"),
                    createDistrict("Narail", "narail", "khulna"),
                    createDistrict("Narayanganj", "narayanganj", "dhaka"),
                    createDistrict("Narsingdi", "narsingdi", "dhaka"),
                    createDistrict("Natore", "natore", "rajshahi"),
                    createDistrict("Nawabganj", "nawabganj", "rajshahi"),
                    createDistrict("Netrokona", "netrokona", "dhaka"),
                    createDistrict("Nilphamari", "nilphamari", "rangpur"),
                    createDistrict("Noakhali", "noakhali", "chittagong"),
                    createDistrict("Pabna", "pabna", "rajshahi"),
                    createDistrict("Panchagarh", "panchagarh", "rangpur"),
                    createDistrict("Patuakhali", "patuakhali", "barisal"),
                    createDistrict("Pirojpur", "pirojpur", "barisal"),
                    createDistrict("Rajbari", "rajbari", "dhaka"),
                    createDistrict("Rajshahi", "rajshahi", "rajshahi"),
                    createDistrict("Rangamati", "rangamati", "chittagong"),
                    createDistrict("Rangpur", "rangpur", "rangpur"),
                    createDistrict("Satkhira", "satkhira", "khulna"),
                    createDistrict("Shariatpur", "shariatpur", "dhaka"),
                    createDistrict("Sherpur", "sherpur", "dhaka"),
                    createDistrict("Sirajganj", "sirajganj", "rajshahi"),
                    createDistrict("Sunamganj", "sunamganj", "sylhet"),
                    createDistrict("Sylhet", "sylhet", "sylhet"),
                    createDistrict("Tangail", "tangail", "dhaka"),
                    createDistrict("Thakurgaon", "thakurgaon", "rangpur"),
                ];

                /**
                 * Available Thana
                 **/
                var configurations = [
                    createUpazila("Amtali", "amtali", "barguna"),
                    createUpazila("Bamna", "bamna", "barguna"),
                    createUpazila("Barguna Sadar", "barguna sadar", "barguna"),
                    createUpazila("Betagi", "betagi", "barguna"),
                    createUpazila("Patharghata", "patharghata", "barguna"),
                    createUpazila("Taltoli", "taltoli", "barguna"),
                    createUpazila("Agailjhara", "agailjhara", "barisal"),
                    createUpazila("Babuganj", "babuganj", "barisal"),
                    createUpazila("Bakerganj", "bakerganj", "barisal"),
                    createUpazila("Banaripara", "banaripara", "barisal"),
                    createUpazila("Gaurnadi", "gaurnadi", "barisal"),
                    createUpazila("Hizla", "hizla", "barisal"),
                    createUpazila("Barisal Sadar", "barisal sadar", "barisal"),
                    createUpazila("Mehendiganj", "mehendiganj", "barisal"),
                    createUpazila("Muladi", "muladi", "barisal"),
                    createUpazila("Wazirpur", "wazirpur", "barisal"),
                    createUpazila("Bhola Sadar", "bhola sadar", "bhola"),
                    createUpazila("Burhanuddin", "burhanuddin", "bhola"),
                    createUpazila("Char Fasson", "char fasson", "bhola"),
                    createUpazila("Daulatkhan", "daulatkhan", "bhola"),
                    createUpazila("Lalmohan", "lalmohan", "bhola"),
                    createUpazila("Manpura", "manpura", "bhola"),
                    createUpazila("Tazumuddin", "tazumuddin", "bhola"),
                    createUpazila("Jhalokati Sadar", "jhalokati sadar", "jhalokati"),
                    createUpazila("Kathalia", "kathalia", "jhalokati"),
                    createUpazila("Nalchity", "nalchity", "jhalokati"),
                    createUpazila("Rajapur", "rajapur", "jhalokati"),
                    createUpazila("Bauphal", "bauphal", "patuakhali"),
                    createUpazila("Dashmina", "dashmina", "patuakhali"),
                    createUpazila("Galachipa", "galachipa", "patuakhali"),
                    createUpazila("Kalapara", "kalapara", "patuakhali"),
                    createUpazila("Mirzaganj", "mirzaganj", "patuakhali"),
                    createUpazila("Patuakhali Sadar", "patuakhali sadar", "patuakhali"),
                    createUpazila("Rangabali", "rangabali", "patuakhali"),
                    createUpazila("Dumki", "dumki", "patuakhali"),
                    createUpazila("Bhandaria", "bhandaria", "pirojpur"),
                    createUpazila("Kawkhali", "kawkhali", "pirojpur"),
                    createUpazila("Mathbaria", "mathbaria", "pirojpur"),
                    createUpazila("Nazirpur", "nazirpur", "pirojpur"),
                    createUpazila("Pirojpur Sadar", "pirojpur sadar", "pirojpur"),
                    createUpazila("Nesarabad (Swarupkati)", "nesarabad (swarupkati)", "pirojpur"),
                    createUpazila("Zianagor", "zianagor", "pirojpur"),
                    createUpazila("Ali Kadam", "ali kadam", "bandarban"),
                    createUpazila("Bandarban Sadar", "bandarban sadar", "bandarban"),
                    createUpazila("Lama", "lama", "bandarban"),
                    createUpazila("Naikhongchhari", "naikhongchhari", "bandarban"),
                    createUpazila("Rowangchhari", "rowangchhari", "bandarban"),
                    createUpazila("Ruma", "ruma", "bandarban"),
                    createUpazila("Thanchi", "thanchi", "bandarban"),
                    createUpazila("Akhaura", "akhaura", "brahmanbaria"),
                    createUpazila("Bancharampur", "bancharampur", "brahmanbaria"),
                    createUpazila("Brahmanbaria Sadar", "brahmanbaria sadar", "brahmanbaria"),
                    createUpazila("Kasba", "kasba", "brahmanbaria"),
                    createUpazila("Nabinagar", "nabinagar", "brahmanbaria"),
                    createUpazila("Nasirnagar", "nasirnagar", "brahmanbaria"),
                    createUpazila("Sarail", "sarail", "brahmanbaria"),
                    createUpazila("Ashuganj", "ashuganj", "brahmanbaria"),
                    createUpazila("Bijoynagar", "bijoynagar", "brahmanbaria"),
                    createUpazila("Chandpur Sadar", "chandpur sadar", "chandpur"),
                    createUpazila("Faridganj", "faridganj", "chandpur"),
                    createUpazila("Haimchar", "haimchar", "chandpur"),
                    createUpazila("Haziganj", "haziganj", "chandpur"),
                    createUpazila("Kachua", "kachua", "chandpur"),
                    createUpazila("Matlab Dakshin", "matlab dakshin", "chandpur"),
                    createUpazila("Matlab Uttar", "matlab uttar", "chandpur"),
                    createUpazila("Shahrasti", "shahrasti", "chandpur"),
                    createUpazila("Anwara", "anwara", "chittagong"),
                    createUpazila("Banshkhali", "banshkhali", "chittagong"),
                    createUpazila("Boalkhali", "boalkhali", "chittagong"),
                    createUpazila("Chandanaish", "chandanaish", "chittagong"),
                    createUpazila("Fatikchhari", "fatikchhari", "chittagong"),
                    createUpazila("Hathazari", "hathazari", "chittagong"),
                    createUpazila("Lohagara", "lohagara", "chittagong"),
                    createUpazila("Mirsharai", "mirsharai", "chittagong"),
                    createUpazila("Patiya", "patiya", "chittagong"),
                    createUpazila("Rangunia", "rangunia", "chittagong"),
                    createUpazila("Raozan", "raozan", "chittagong"),
                    createUpazila("Sandwip", "sandwip", "chittagong"),
                    createUpazila("Satkania", "satkania", "chittagong"),
                    createUpazila("Sitakunda", "sitakunda", "chittagong"),
                    createUpazila("Bandor (Chittagong Port) Thana", "bandor (chittagong port) thana", "chittagong"),
                    createUpazila("Chandgaon Thana", "chandgaon thana", "chittagong"),
                    createUpazila("Double Mooring Thana", "double mooring thana", "chittagong"),
                    createUpazila("Kotwali Thana", "kotwali thana", "chittagong"),
                    createUpazila("Pahartali Thana", "pahartali thana", "chittagong"),
                    createUpazila("Panchlaish Thana", "panchlaish thana", "chittagong"),
                    createUpazila("Barura", "barura", "comilla"),
                    createUpazila("Brahmanpara", "brahmanpara", "comilla"),
                    createUpazila("Burichang", "burichang", "comilla"),
                    createUpazila("Chandina", "chandina", "comilla"),
                    createUpazila("Chauddagram", "chauddagram", "comilla"),
                    createUpazila("Daudkandi", "daudkandi", "comilla"),
                    createUpazila("Debidwar", "debidwar", "comilla"),
                    createUpazila("Homna", "homna", "comilla"),
                    createUpazila("Laksam", "laksam", "comilla"),
                    createUpazila("Muradnagar", "muradnagar", "comilla"),
                    createUpazila("Nangalkot", "nangalkot", "comilla"),
                    createUpazila("Comilla Adarsha Sadar", "comilla adarsha sadar", "comilla"),
                    createUpazila("Meghna", "meghna", "comilla"),
                    createUpazila("Titas", "titas", "comilla"),
                    createUpazila("Monohargonj", "monohargonj", "comilla"),
                    createUpazila("Comilla Sadar Dakshin", "comilla sadar dakshin", "comilla"),
                    createUpazila("Chakaria", "chakaria", "coxs bazar"),
                    createUpazila("Coxs Bazar Sadar", "coxs bazar sadar", "coxs bazar"),
                    createUpazila("Kutubdia", "kutubdia", "coxs bazar"),
                    createUpazila("Maheshkhali", "maheshkhali", "coxs bazar"),
                    createUpazila("Ramu", "ramu", "coxs bazar"),
                    createUpazila("Teknaf", "teknaf", "coxs bazar"),
                    createUpazila("Ukhia", "ukhia", "coxs bazar"),
                    createUpazila("Pekua", "pekua", "coxs bazar"),
                    createUpazila("Chhagalnaiya", "chhagalnaiya", "feni"),
                    createUpazila("Daganbhuiyan", "daganbhuiyan", "feni"),
                    createUpazila("Feni Sadar", "feni sadar", "feni"),
                    createUpazila("Parshuram", "parshuram", "feni"),
                    createUpazila("Sonagazi", "sonagazi", "feni"),
                    createUpazila("Fulgazi", "fulgazi", "feni"),
                    createUpazila("Dighinala", "dighinala", "khagrachhari"),
                    createUpazila("Khagrachhari", "khagrachhari", "khagrachhari"),
                    createUpazila("Lakshmichhari", "lakshmichhari", "khagrachhari"),
                    createUpazila("Mahalchhari", "mahalchhari", "khagrachhari"),
                    createUpazila("Manikchhari", "manikchhari", "khagrachhari"),
                    createUpazila("Matiranga", "matiranga", "khagrachhari"),
                    createUpazila("Panchhari", "panchhari", "khagrachhari"),
                    createUpazila("Ramgarh", "ramgarh", "khagrachhari"),
                    createUpazila("Lakshmipur Sadar", "lakshmipur sadar", "lakshmipur"),
                    createUpazila("Raipur", "raipur", "lakshmipur"),
                    createUpazila("Ramganj", "ramganj", "lakshmipur"),
                    createUpazila("Ramgati", "ramgati", "lakshmipur"),
                    createUpazila("Kamalnagar", "kamalnagar", "lakshmipur"),
                    createUpazila("Begumganj", "begumganj", "noakhali"),
                    createUpazila("Noakhali Sadar", "noakhali sadar", "noakhali"),
                    createUpazila("Chatkhil", "chatkhil", "noakhali"),
                    createUpazila("Companiganj", "companiganj", "noakhali"),
                    createUpazila("Hatiya", "hatiya", "noakhali"),
                    createUpazila("Senbagh", "senbagh", "noakhali"),
                    createUpazila("Sonaimuri", "sonaimuri", "noakhali"),
                    createUpazila("Subarnachar", "subarnachar", "noakhali"),
                    createUpazila("Kabirhat", "kabirhat", "noakhali"),
                    createUpazila("Bagaichhari", "bagaichhari", "rangamati"),
                    createUpazila("Barkal", "barkal", "rangamati"),
                    createUpazila("Kawkhali (Betbunia)", "kawkhali (betbunia)", "rangamati"),
                    createUpazila("Belaichhari", "belaichhari", "rangamati"),
                    createUpazila("Kaptai", "kaptai", "rangamati"),
                    createUpazila("Juraichhari", "juraichhari", "rangamati"),
                    createUpazila("Langadu", "langadu", "rangamati"),
                    createUpazila("Naniyachar", "naniyachar", "rangamati"),
                    createUpazila("Rajasthali", "rajasthali", "rangamati"),
                    createUpazila("Rangamati Sadar", "rangamati sadar", "rangamati"),
                    createUpazila("Dhamrai", "dhamrai", "dhaka"),
                    createUpazila("Dohar", "dohar", "dhaka"),
                    createUpazila("Keraniganj", "keraniganj", "dhaka"),
                    createUpazila("Nawabganj", "nawabganj", "dhaka"),
                    createUpazila("Savar", "savar", "dhaka"),
                    createUpazila("Alfadanga", "alfadanga", "faridpur"),
                    createUpazila("Bhanga", "bhanga", "faridpur"),
                    createUpazila("Boalmari", "boalmari", "faridpur"),
                    createUpazila("Charbhadrasan", "charbhadrasan", "faridpur"),
                    createUpazila("Faridpur Sadar", "faridpur sadar", "faridpur"),
                    createUpazila("Madhukhali", "madhukhali", "faridpur"),
                    createUpazila("Nagarkanda", "nagarkanda", "faridpur"),
                    createUpazila("Sadarpur", "sadarpur", "faridpur"),
                    createUpazila("Saltha", "saltha", "faridpur"),
                    createUpazila("Gazipur Sadar", "gazipur sadar", "gazipur"),
                    createUpazila("Kaliakair", "kaliakair", "gazipur"),
                    createUpazila("Kaliganj", "kaliganj", "gazipur"),
                    createUpazila("Kapasia", "kapasia", "gazipur"),
                    createUpazila("Sreepur", "sreepur", "gazipur"),
                    createUpazila("Gopalganj Sadar", "gopalganj sadar", "gopalganj"),
                    createUpazila("Kashiani", "kashiani", "gopalganj"),
                    createUpazila("Kotalipara", "kotalipara", "gopalganj"),
                    createUpazila("Muksudpur", "muksudpur", "gopalganj"),
                    createUpazila("Tungipara", "tungipara", "gopalganj"),
                    createUpazila("Baksiganj", "baksiganj", "jamalpur"),
                    createUpazila("Dewanganj", "dewanganj", "jamalpur"),
                    createUpazila("Islampur", "islampur", "jamalpur"),
                    createUpazila("Jamalpur Sadar", "jamalpur sadar", "jamalpur"),
                    createUpazila("Madarganj", "madarganj", "jamalpur"),
                    createUpazila("Melandaha", "melandaha", "jamalpur"),
                    createUpazila("Sarishabari", "sarishabari", "jamalpur"),
                    createUpazila("Astagram", "astagram", "kishoreganj"),
                    createUpazila("Bajitpur", "bajitpur", "kishoreganj"),
                    createUpazila("Bhairab", "bhairab", "kishoreganj"),
                    createUpazila("Hossainpur", "hossainpur", "kishoreganj"),
                    createUpazila("Itna", "itna", "kishoreganj"),
                    createUpazila("Karimganj", "karimganj", "kishoreganj"),
                    createUpazila("Katiadi", "katiadi", "kishoreganj"),
                    createUpazila("Kishoreganj Sadar", "kishoreganj sadar", "kishoreganj"),
                    createUpazila("Kuliarchar", "kuliarchar", "kishoreganj"),
                    createUpazila("Mithamain", "mithamain", "kishoreganj"),
                    createUpazila("Nikli", "nikli", "kishoreganj"),
                    createUpazila("Pakundia", "pakundia", "kishoreganj"),
                    createUpazila("Tarail", "tarail", "kishoreganj"),
                    createUpazila("Rajoir", "rajoir", "madaripur"),
                    createUpazila("Madaripur Sadar", "madaripur sadar", "madaripur"),
                    createUpazila("Kalkini", "kalkini", "madaripur"),
                    createUpazila("Shibchar", "shibchar", "madaripur"),
                    createUpazila("Daulatpur", "daulatpur", "manikganj"),
                    createUpazila("Ghior", "ghior", "manikganj"),
                    createUpazila("Harirampur", "harirampur", "manikganj"),
                    createUpazila("Manikgonj Sadar", "manikgonj sadar", "manikganj"),
                    createUpazila("Saturia", "saturia", "manikganj"),
                    createUpazila("Shivalaya", "shivalaya", "manikganj"),
                    createUpazila("Singair", "singair", "manikganj"),
                    createUpazila("Gazaria", "gazaria", "munshiganj"),
                    createUpazila("Lohajang", "lohajang", "munshiganj"),
                    createUpazila("Munshiganj Sadar", "munshiganj sadar", "munshiganj"),
                    createUpazila("Sirajdikhan", "sirajdikhan", "munshiganj"),
                    createUpazila("Sreenagar", "sreenagar", "munshiganj"),
                    createUpazila("Tongibari", "tongibari", "munshiganj"),
                    createUpazila("Bhaluka", "bhaluka", "mymensingh"),
                    createUpazila("Dhobaura", "dhobaura", "mymensingh"),
                    createUpazila("Fulbaria", "fulbaria", "mymensingh"),
                    createUpazila("Gaffargaon", "gaffargaon", "mymensingh"),
                    createUpazila("Gauripur", "gauripur", "mymensingh"),
                    createUpazila("Haluaghat", "haluaghat", "mymensingh"),
                    createUpazila("Ishwarganj", "ishwarganj", "mymensingh"),
                    createUpazila("Mymensingh Sadar", "mymensingh sadar", "mymensingh"),
                    createUpazila("Muktagachha", "muktagachha", "mymensingh"),
                    createUpazila("Nandail", "nandail", "mymensingh"),
                    createUpazila("Phulpur", "phulpur", "mymensingh"),
                    createUpazila("Trishal", "trishal", "mymensingh"),
                    createUpazila("Tara Khanda", "tara khanda", "mymensingh"),
                    createUpazila("Araihazar", "araihazar", "narayanganj"),
                    createUpazila("Bandar", "bandar", "narayanganj"),
                    createUpazila("Narayanganj Sadar", "narayanganj sadar", "narayanganj"),
                    createUpazila("Rupganj", "rupganj", "narayanganj"),
                    createUpazila("Sonargaon", "sonargaon", "narayanganj"),
                    createUpazila("Atpara", "atpara", "netrokona"),
                    createUpazila("Barhatta", "barhatta", "netrokona"),
                    createUpazila("Durgapur", "durgapur", "netrokona"),
                    createUpazila("Khaliajuri", "khaliajuri", "netrokona"),
                    createUpazila("Kalmakanda", "kalmakanda", "netrokona"),
                    createUpazila("Kendua", "kendua", "netrokona"),
                    createUpazila("Madan", "madan", "netrokona"),
                    createUpazila("Mohanganj", "mohanganj", "netrokona"),
                    createUpazila("Netrokona Sadar", "netrokona sadar", "netrokona"),
                    createUpazila("Purbadhala", "purbadhala", "netrokona"),
                    createUpazila("Baliakandi", "baliakandi", "rajbari"),
                    createUpazila("Goalandaghat", "goalandaghat", "rajbari"),
                    createUpazila("Pangsha", "pangsha", "rajbari"),
                    createUpazila("Rajbari Sadar", "rajbari sadar", "rajbari"),
                    createUpazila("Kalukhali", "kalukhali", "rajbari"),
                    createUpazila("Bhedarganj", "bhedarganj", "shariatpur"),
                    createUpazila("Damudya", "damudya", "shariatpur"),
                    createUpazila("Gosairhat", "gosairhat", "shariatpur"),
                    createUpazila("Naria", "naria", "shariatpur"),
                    createUpazila("Shariatpur Sadar", "shariatpur sadar", "shariatpur"),
                    createUpazila("Zanjira", "zanjira", "shariatpur"),
                    createUpazila("Shakhipur", "shakhipur", "shariatpur"),
                    createUpazila("Jhenaigati", "jhenaigati", "sherpur"),
                    createUpazila("Nakla", "nakla", "sherpur"),
                    createUpazila("Nalitabari", "nalitabari", "sherpur"),
                    createUpazila("Sherpur Sadar", "sherpur sadar", "sherpur"),
                    createUpazila("Sreebardi", "sreebardi", "sherpur"),
                    createUpazila("Gopalpur", "gopalpur", "tangail"),
                    createUpazila("Basail", "basail", "tangail"),
                    createUpazila("Bhuapur", "bhuapur", "tangail"),
                    createUpazila("Delduar", "delduar", "tangail"),
                    createUpazila("Ghatail", "ghatail", "tangail"),
                    createUpazila("Kalihati", "kalihati", "tangail"),
                    createUpazila("Madhupur", "madhupur", "tangail"),
                    createUpazila("Mirzapur", "mirzapur", "tangail"),
                    createUpazila("Nagarpur", "nagarpur", "tangail"),
                    createUpazila("Sakhipur", "sakhipur", "tangail"),
                    createUpazila("Dhanbari", "dhanbari", "tangail"),
                    createUpazila("Tangail Sadar", "tangail sadar", "tangail"),
                    createUpazila("Narsingdi Sadar", "narsingdi sadar", "narsingdi"),
                    createUpazila("Belabo", "belabo", "narsingdi"),
                    createUpazila("Monohardi", "monohardi", "narsingdi"),
                    createUpazila("Palash", "palash", "narsingdi"),
                    createUpazila("Raipura", "raipura", "narsingdi"),
                    createUpazila("Shibpur", "shibpur", "narsingdi"),
                    createUpazila("Bagerhat Sadar", "bagerhat sadar", "bagerhat"),
                    createUpazila("Chitalmari", "chitalmari", "bagerhat"),
                    createUpazila("Fakirhat", "fakirhat", "bagerhat"),
                    createUpazila("Kachua", "kachua", "bagerhat"),
                    createUpazila("Mollahat", "mollahat", "bagerhat"),
                    createUpazila("Mongla", "mongla", "bagerhat"),
                    createUpazila("Morrelganj", "morrelganj", "bagerhat"),
                    createUpazila("Rampal", "rampal", "bagerhat"),
                    createUpazila("Sarankhola", "sarankhola", "bagerhat"),
                    createUpazila("Alamdanga", "alamdanga", "chuadanga"),
                    createUpazila("Chuadanga Sadar", "chuadanga sadar", "chuadanga"),
                    createUpazila("Damurhuda", "damurhuda", "chuadanga"),
                    createUpazila("Jibannagar", "jibannagar", "chuadanga"),
                    createUpazila("Abhaynagar", "abhaynagar", "jessore"),
                    createUpazila("Bagherpara", "bagherpara", "jessore"),
                    createUpazila("Chaugachha", "chaugachha", "jessore"),
                    createUpazila("Jhikargachha", "jhikargachha", "jessore"),
                    createUpazila("Keshabpur", "keshabpur", "jessore"),
                    createUpazila("Jessore Sadar", "jessore sadar", "jessore"),
                    createUpazila("Manirampur", "manirampur", "jessore"),
                    createUpazila("Sharsha", "sharsha", "jessore"),
                    createUpazila("Harinakunda", "harinakunda", "jhenaida"),
                    createUpazila("Jhenaidah Sadar", "jhenaidah sadar", "jhenaida"),
                    createUpazila("Kaliganj", "kaliganj", "jhenaida"),
                    createUpazila("Kotchandpur", "kotchandpur", "jhenaida"),
                    createUpazila("Maheshpur", "maheshpur", "jhenaida"),
                    createUpazila("Shailkupa", "shailkupa", "jhenaida"),
                    createUpazila("Batiaghata", "batiaghata", "khulna"),
                    createUpazila("Dacope", "dacope", "khulna"),
                    createUpazila("Dumuria", "dumuria", "khulna"),
                    createUpazila("Dighalia", "dighalia", "khulna"),
                    createUpazila("Koyra", "koyra", "khulna"),
                    createUpazila("Paikgachha", "paikgachha", "khulna"),
                    createUpazila("Phultala", "phultala", "khulna"),
                    createUpazila("Rupsha", "rupsha", "khulna"),
                    createUpazila("Terokhada", "terokhada", "khulna"),
                    createUpazila("Daulatpur Thana", "daulatpur thana", "khulna"),
                    createUpazila("Khalishpur Thana", "khalishpur thana", "khulna"),
                    createUpazila("Khan Jahan Ali Thana", "khan jahan ali thana", "khulna"),
                    createUpazila("Kotwali Thana", "kotwali thana", "khulna"),
                    createUpazila("Sonadanga Thana", "sonadanga thana", "khulna"),
                    createUpazila("Harintana Thana", "harintana thana", "khulna"),
                    createUpazila("Bheramara", "bheramara", "kushtia"),
                    createUpazila("Daulatpur", "daulatpur", "kushtia"),
                    createUpazila("Khoksa", "khoksa", "kushtia"),
                    createUpazila("Kumarkhali", "kumarkhali", "kushtia"),
                    createUpazila("Kushtia Sadar", "kushtia sadar", "kushtia"),
                    createUpazila("Mirpur", "mirpur", "kushtia"),
                    createUpazila("Shekhpara", "shekhpara", "kushtia"),
                    createUpazila("Magura Sadar", "magura sadar", "magura"),
                    createUpazila("Mohammadpur", "mohammadpur", "magura"),
                    createUpazila("Shalikha", "shalikha", "magura"),
                    createUpazila("Sreepur", "sreepur", "magura"),
                    createUpazila("Gangni", "gangni", "meherpur"),
                    createUpazila("Meherpur Sadar", "meherpur sadar", "meherpur"),
                    createUpazila("Mujibnagar", "mujibnagar", "meherpur"),
                    createUpazila("Kalia", "kalia", "narail"),
                    createUpazila("Lohagara", "lohagara", "narail"),
                    createUpazila("Narail Sadar", "narail sadar", "narail"),
                    createUpazila("Naragati Thana", "naragati thana", "narail"),
                    createUpazila("Assasuni", "assasuni", "satkhira"),
                    createUpazila("Debhata", "debhata", "satkhira"),
                    createUpazila("Kalaroa", "kalaroa", "satkhira"),
                    createUpazila("Kaliganj", "kaliganj", "satkhira"),
                    createUpazila("Satkhira Sadar", "satkhira sadar", "satkhira"),
                    createUpazila("Shyamnagar", "shyamnagar", "satkhira"),
                    createUpazila("Tala", "tala", "satkhira"),
                    createUpazila("Akkelpur", "akkelpur", "joypurhat"),
                    createUpazila("Joypurhat Sadar", "joypurhat sadar", "joypurhat"),
                    createUpazila("Kalai", "kalai", "joypurhat"),
                    createUpazila("Khetlal", "khetlal", "joypurhat"),
                    createUpazila("Panchbibi", "panchbibi", "joypurhat"),
                    createUpazila("Adamdighi", "adamdighi", "bogra"),
                    createUpazila("Bogra Sadar", "bogra sadar", "bogra"),
                    createUpazila("Dhunat", "dhunat", "bogra"),
                    createUpazila("Dhupchanchia", "dhupchanchia", "bogra"),
                    createUpazila("Gabtali", "gabtali", "bogra"),
                    createUpazila("Kahaloo", "kahaloo", "bogra"),
                    createUpazila("Nandigram", "nandigram", "bogra"),
                    createUpazila("Sariakandi", "sariakandi", "bogra"),
                    createUpazila("Shajahanpur", "shajahanpur", "bogra"),
                    createUpazila("Sherpur", "sherpur", "bogra"),
                    createUpazila("Shibganj", "shibganj", "bogra"),
                    createUpazila("Sonatola", "sonatola", "bogra"),
                    createUpazila("Atrai", "atrai", "naogaon"),
                    createUpazila("Badalgachhi", "badalgachhi", "naogaon"),
                    createUpazila("Manda", "manda", "naogaon"),
                    createUpazila("Dhamoirhat", "dhamoirhat", "naogaon"),
                    createUpazila("Mohadevpur", "mohadevpur", "naogaon"),
                    createUpazila("Naogaon Sadar", "naogaon sadar", "naogaon"),
                    createUpazila("Niamatpur", "niamatpur", "naogaon"),
                    createUpazila("Patnitala", "patnitala", "naogaon"),
                    createUpazila("Porsha", "porsha", "naogaon"),
                    createUpazila("Raninagar", "raninagar", "naogaon"),
                    createUpazila("Sapahar", "sapahar", "naogaon"),
                    createUpazila("Bagatipara", "bagatipara", "natore"),
                    createUpazila("Baraigram", "baraigram", "natore"),
                    createUpazila("Gurudaspur", "gurudaspur", "natore"),
                    createUpazila("Lalpur", "lalpur", "natore"),
                    createUpazila("Natore Sadar", "natore sadar", "natore"),
                    createUpazila("Singra", "singra", "natore"),
                    createUpazila("Naldanga", "naldanga", "natore"),
                    createUpazila("Bholahat", "bholahat", "nawabganj"),
                    createUpazila("Gomastapur", "gomastapur", "nawabganj"),
                    createUpazila("Nachole", "nachole", "nawabganj"),
                    createUpazila("Nawabganj Sadar", "nawabganj sadar", "nawabganj"),
                    createUpazila("Shibganj", "shibganj", "nawabganj"),
                    createUpazila("Ataikula", "ataikula", "pabna"),
                    createUpazila("Atgharia", "atgharia", "pabna"),
                    createUpazila("Bera", "bera", "pabna"),
                    createUpazila("Bhangura", "bhangura", "pabna"),
                    createUpazila("Chatmohar", "chatmohar", "pabna"),
                    createUpazila("Faridpur", "faridpur", "pabna"),
                    createUpazila("Ishwardi", "ishwardi", "pabna"),
                    createUpazila("Pabna Sadar", "pabna sadar", "pabna"),
                    createUpazila("Santhia", "santhia", "pabna"),
                    createUpazila("Sujanagar", "sujanagar", "pabna"),
                    createUpazila("Belkuchi", "belkuchi", "sirajganj"),
                    createUpazila("Chauhali", "chauhali", "sirajganj"),
                    createUpazila("Kamarkhanda", "kamarkhanda", "sirajganj"),
                    createUpazila("Kazipur", "kazipur", "sirajganj"),
                    createUpazila("Raiganj", "raiganj", "sirajganj"),
                    createUpazila("Shahjadpur", "shahjadpur", "sirajganj"),
                    createUpazila("Sirajganj Sadar", "sirajganj sadar", "sirajganj"),
                    createUpazila("Tarash", "tarash", "sirajganj"),
                    createUpazila("Ullahpara", "ullahpara", "sirajganj"),
                    createUpazila("Bagha", "bagha", "rajshahi"),
                    createUpazila("Bagmara", "bagmara", "rajshahi"),
                    createUpazila("Charghat", "charghat", "rajshahi"),
                    createUpazila("Durgapur", "durgapur", "rajshahi"),
                    createUpazila("Godagari", "godagari", "rajshahi"),
                    createUpazila("Mohanpur", "mohanpur", "rajshahi"),
                    createUpazila("Paba", "paba", "rajshahi"),
                    createUpazila("Puthia", "puthia", "rajshahi"),
                    createUpazila("Tanore", "tanore", "rajshahi"),
                    createUpazila("Boalia Thana", "boalia thana", "rajshahi"),
                    createUpazila("Matihar Thana", "matihar thana", "rajshahi"),
                    createUpazila("Rajpara Thana", "rajpara thana", "rajshahi"),
                    createUpazila("Shah Mokdum Thana", "shah mokdum thana", "rajshahi"),
                    createUpazila("Birampur", "birampur", "dinajpur"),
                    createUpazila("Birganj", "birganj", "dinajpur"),
                    createUpazila("Biral", "biral", "dinajpur"),
                    createUpazila("Bochaganj", "bochaganj", "dinajpur"),
                    createUpazila("Chirirbandar", "chirirbandar", "dinajpur"),
                    createUpazila("Phulbari", "phulbari", "dinajpur"),
                    createUpazila("Ghoraghat", "ghoraghat", "dinajpur"),
                    createUpazila("Hakimpur", "hakimpur", "dinajpur"),
                    createUpazila("Kaharole", "kaharole", "dinajpur"),
                    createUpazila("Khansama", "khansama", "dinajpur"),
                    createUpazila("Dinajpur Sadar", "dinajpur sadar", "dinajpur"),
                    createUpazila("Nawabganj", "nawabganj", "dinajpur"),
                    createUpazila("Parbatipur", "parbatipur", "dinajpur"),
                    createUpazila("Phulchhari", "phulchhari", "gaibandha"),
                    createUpazila("Gaibandha Sadar", "gaibandha sadar", "gaibandha"),
                    createUpazila("Gobindaganj", "gobindaganj", "gaibandha"),
                    createUpazila("Palashbari", "palashbari", "gaibandha"),
                    createUpazila("Sadullapur", "sadullapur", "gaibandha"),
                    createUpazila("Sughatta", "sughatta", "gaibandha"),
                    createUpazila("Sundarganj", "sundarganj", "gaibandha"),
                    createUpazila("Bhurungamari", "bhurungamari", "kurigram"),
                    createUpazila("Char Rajibpur", "char rajibpur", "kurigram"),
                    createUpazila("Chilmari", "chilmari", "kurigram"),
                    createUpazila("Phulbari", "phulbari", "kurigram"),
                    createUpazila("Kurigram Sadar", "kurigram sadar", "kurigram"),
                    createUpazila("Nageshwari", "nageshwari", "kurigram"),
                    createUpazila("Rajarhat", "rajarhat", "kurigram"),
                    createUpazila("Raomari", "raomari", "kurigram"),
                    createUpazila("Ulipur", "ulipur", "kurigram"),
                    createUpazila("Aditmari", "aditmari", "lalmonirhat"),
                    createUpazila("Hatibandha", "hatibandha", "lalmonirhat"),
                    createUpazila("Kaliganj", "kaliganj", "lalmonirhat"),
                    createUpazila("Lalmonirhat Sadar", "lalmonirhat sadar", "lalmonirhat"),
                    createUpazila("Patgram", "patgram", "lalmonirhat"),
                    createUpazila("Dimla", "dimla", "nilphamari"),
                    createUpazila("Domar", "domar", "nilphamari"),
                    createUpazila("Jaldhaka", "jaldhaka", "nilphamari"),
                    createUpazila("Kishoreganj", "kishoreganj", "nilphamari"),
                    createUpazila("Nilphamari Sadar", "nilphamari sadar", "nilphamari"),
                    createUpazila("Saidpur", "saidpur", "nilphamari"),
                    createUpazila("Atwari", "atwari", "panchagarh"),
                    createUpazila("Boda", "boda", "panchagarh"),
                    createUpazila("Debiganj", "debiganj", "panchagarh"),
                    createUpazila("Panchagarh Sadar", "panchagarh sadar", "panchagarh"),
                    createUpazila("Tetulia", "tetulia", "panchagarh"),
                    createUpazila("Badarganj", "badarganj", "rangpur"),
                    createUpazila("Gangachhara", "gangachhara", "rangpur"),
                    createUpazila("Kaunia", "kaunia", "rangpur"),
                    createUpazila("Rangpur Sadar", "rangpur sadar", "rangpur"),
                    createUpazila("Mithapukur", "mithapukur", "rangpur"),
                    createUpazila("Pirgachha", "pirgachha", "rangpur"),
                    createUpazila("Pirganj", "pirganj", "rangpur"),
                    createUpazila("Taraganj", "taraganj", "rangpur"),
                    createUpazila("Baliadangi", "baliadangi", "thakurgaon"),
                    createUpazila("Haripur", "haripur", "thakurgaon"),
                    createUpazila("Pirganj", "pirganj", "thakurgaon"),
                    createUpazila("Ranisankail", "ranisankail", "thakurgaon"),
                    createUpazila("Thakurgaon Sadar", "thakurgaon sadar", "thakurgaon"),
                    createUpazila("Ajmiriganj", "ajmiriganj", "habiganj"),
                    createUpazila("Bahubal", "bahubal", "habiganj"),
                    createUpazila("Baniyachong", "baniyachong", "habiganj"),
                    createUpazila("Chunarughat", "chunarughat", "habiganj"),
                    createUpazila("Habiganj Sadar", "habiganj sadar", "habiganj"),
                    createUpazila("Lakhai", "lakhai", "habiganj"),
                    createUpazila("Madhabpur", "madhabpur", "habiganj"),
                    createUpazila("Nabiganj", "nabiganj", "habiganj"),
                    createUpazila("Barlekha", "barlekha", "moulvibazar"),
                    createUpazila("Kamalganj", "kamalganj", "moulvibazar"),
                    createUpazila("Kulaura", "kulaura", "moulvibazar"),
                    createUpazila("Moulvibazar Sadar", "moulvibazar sadar", "moulvibazar"),
                    createUpazila("Rajnagar", "rajnagar", "moulvibazar"),
                    createUpazila("Sreemangal", "sreemangal", "moulvibazar"),
                    createUpazila("Juri", "juri", "moulvibazar"),
                    createUpazila("Bishwamvarpur", "bishwamvarpur", "sunamganj"),
                    createUpazila("Chhatak", "chhatak", "sunamganj"),
                    createUpazila("Derai", "derai", "sunamganj"),
                    createUpazila("Dharampasha", "dharampasha", "sunamganj"),
                    createUpazila("Dowarabazar", "dowarabazar", "sunamganj"),
                    createUpazila("Jagannathpur", "jagannathpur", "sunamganj"),
                    createUpazila("Jamalganj", "jamalganj", "sunamganj"),
                    createUpazila("Sullah", "sullah", "sunamganj"),
                    createUpazila("Sunamganj Sadar", "sunamganj sadar", "sunamganj"),
                    createUpazila("Tahirpur", "tahirpur", "sunamganj"),
                    createUpazila("South Sunamganj", "south sunamganj", "sunamganj"),
                    createUpazila("Balaganj", "balaganj", "sylhet"),
                    createUpazila("Beanibazar", "beanibazar", "sylhet"),
                    createUpazila("Bishwanath", "bishwanath", "sylhet"),
                    createUpazila("Companigonj", "companigonj", "sylhet"),
                    createUpazila("Fenchuganj", "fenchuganj", "sylhet"),
                    createUpazila("Golapganj", "golapganj", "sylhet"),
                    createUpazila("Gowainghat", "gowainghat", "sylhet"),
                    createUpazila("Jaintiapur", "jaintiapur", "sylhet"),
                    createUpazila("Kanaighat", "kanaighat", "sylhet"),
                    createUpazila("Sylhet Sadar", "sylhet sadar", "sylhet"),
                    createUpazila("Zakiganj", "zakiganj", "sylhet"),
                    createUpazila("South Shurma", "south shurma", "sylhet"),
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
                    <legend>Enter New Google Map Embed Link<span class="optional">(optional)</span></legend>
                    <input type="text" name="map" value="" >
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