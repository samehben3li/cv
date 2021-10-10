<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.1/css/all.min.css" integrity="sha512-ioRJH7yXnyX+7fXTQEKPULWkMn3CqMcapK0NNtCN8q//sW7ZeVFcbMJ9RvX99TwDg6P8rAH2IqUSt2TLab4Xmw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/fontawesome.min.css" integrity="sha512-P9vJUXK+LyvAzj8otTOKzdfF1F3UYVl13+F8Fof8/2QNb8Twd6Vb+VD52I7+87tex9UXxnzPgWA3rH96RExA7A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="src/css/paper-bootstrap-wizard.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#"><span></span>CV</a></div>


        </div>
    </nav>


    <form action="upl.php" method="POST" enctype="multipart/form-data">
        <div class="cardContain">
            <div class="cardBx">
                <div class="BtnP">
                    <button type="button" id="precBtn" class="active" onclick="prec()">
                        <i class="fas fa-arrow-circle-left"></i>
                    </button>
                </div>
                <div class="img">
                    <i class="fas fa-cloud-upload-alt" id="upfile1" style="cursor:pointer"></i>
                    <input type="file" name="my_image" onchange="readURL(this);" id="file1" name="file1" style="display: none;" />
                    <img id="output" class="imgInput">
                </div>
                <div class="detailsBx active" id="page1">

                    <div class="inputs">
                        Nom <input name="name" type="text">
                        Prénom <input name="lastname" type="text">
                        Date de naissance <input name="ddn" type="date">
                        Address <textarea name="address" id="TA1" onclick="areatext('TA1','btn1')"></textarea>
                        <button id="btn1" onclick="btnArea('TA1','btn1')">Done</button>
                    </div>

                </div>
                <div class="detailsBx" id="page2">

                    <div class="inputs">
                        Numero <input type="text" name="numt" pattern="[0-9]{8}" length="8">
                        Email <input type="email" name="mail">
                        Page Facebook <input type="text" name="fac">
                        Compte Twitter <input type="text" name="twi">
                        Compte Linkedin <input type="text" name="li">


                    </div>

                </div>
                <div class="detailsBx" id="page3">

                    <div class="inputs">
                        Niveau d'études <select name="nive">
                            <option value="baccalaureat">Baccalauréat</option>
                            <option value="licence">Licence</option>
                            <option value="master">Master</option>
                            <option value="doctorat">Doctorat</option>
                        </select>
                        <div class="checkGrp">


                            <div class="checkRow">Informatiques:<br>
                                <div>HTML<input type="checkbox" name="b1" value="HTML">
                                </div>
                                <div>CSS<input type="checkbox" name="b2" value="CSS">
                                </div>
                                <div>JavaScript<input type="checkbox" name="b3" value="JavaScript">
                                </div>
                                <div>Word Press<input type="checkbox" name="b4" value="WordPress"></div>
                            </div>

                            <div class="checkRow">Langues:
                                <div>
                                    Anglais<input type="checkbox" name="c1" value="anglais"><br>
                                    Chinois<input type="checkbox" name="c2" value="chinois"></div>
                                <div>
                                    Français<input type="checkbox" name="c3" value="français"><br>
                                    Allemand<input type="checkbox" name="c4" value="allemand"></div>
                            </div>
                        </div>
                        Titre de Profile
                        <input type="text" name="dome" placeholder="entrez votre domaine d'etudes ">

                    </div>

                </div>
                <div class="detailsBx" id="page4">

                    <div class="inputs">
                        Description:
                        <textarea id="TA2" name="desc" onclick="areatext('TA2','btn2')"></textarea>
                        <button id="btn2" onclick="btnArea('TA2','btn2')">Done</button><br>
                        Formations & Certifications:
                        <textarea id="TA3" name="formation" onclick="areatext('TA3','btn3')"></textarea>
                        <button id="btn3" onclick="btnArea('TA3','btn3')">Done</button><br>
                        Experience Professionel:
                        <textarea id="TA4" name="exp" onclick="areatext('TA4','btn4')"></textarea>
                        <button id="btn4" onclick="btnArea('TA4','btn4')">Done</button><br>

                    </div>

                </div>
                <div class="detailsBx" id="page5">

                    <div class="inputsInterests">
                        Interests
                        <div class="interests">
                            <div>Sports <input type="checkbox" name="s1" value="sports">
                            </div>
                            <div> Voyage <input type="checkbox" name="s2" value="voyage">
                            </div>
                            <div>Conduit <input type="checkbox" name="s3" value="conduit">
                            </div>
                            <div>Paint <input type="checkbox" name="s4" value="paint">
                            </div>
                            <div>Lecture <input type="checkbox" name="s5" value="lecture">
                            </div>
                            <div>Musique <input type="checkbox" name="s6" value="musique">
                            </div>
                            <div>Photographe <input type="checkbox" name="s7" value="photographie"></div>
                        </div>
                    </div>

                </div>
                <div class="BtnP">
                    <button type="button" id="nextBtn" class="" onclick="next()">
                        <i class="fas fa-arrow-circle-right"></i>
                    </button>
                </div>
                <input type="text" value="0" id="pageHidden" style="display: none;">
            </div>

        </div>
        <input type="submit" class="btnSubmit" value="Suivant" >
    </form>

    <script src="script.js"></script>
    <script>
        $("#upfile1").click(function() {
            $("#file1").trigger('click');
        });
    </script>
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                const icon = document.querySelector('.fa-cloud-upload-alt');
                icon.classList.toggle('active');
                const img = document.querySelector('.imgInput');
                img.classList.toggle('active');

                reader.onload = function(e) {
                    $('#output')
                        .attr('src', e.target.result)


                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
    <script src="pagination.js"></script>

</body>

</html>