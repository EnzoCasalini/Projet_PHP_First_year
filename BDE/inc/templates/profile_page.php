<body>
    <section class="site">
        <section class="section12">
            <div class="section12__topbar">
            <?php 
                if (isset($_SESSION['user_name']))
                {
                    echo '<a href="/profile">' . $_SESSION['user_name']; 
                }
                ?></a>
                <div class="burger" id="burger-icon">
                    <div></div>
                </div>
            </div>

            <div class="section12__title">
                <h1>PROFIL</h1>
                <img src="./assets/IMG/Ynov.svg" alt="Ynov Sophia Campus">
                <div class="section12__gestion">
                    <div class="section12__profil">
                        <h2>Mon profil</h2>
                        <p>
                            <?php 
                            if (isset($_SESSION['user_role']))
                            {
                                echo $_SESSION['user_role']; 
                            }
                            ?>
                        </p>
                        <div class="section12__profil__pp">
                            <?php
                            if (isset($_SESSION['user_pp']))
                            {
                                echo '<img src="./assets/IMG/PP/' . $_SESSION['user_pp'] . '" alt="Photo_de_profil">'; 
                            }
                            ?>
                        </div>
                        <div class="section12__profil__infos">
                            <span>
                                <?php 
                                if (isset($_SESSION['user_name']))
                                {
                                    echo $_SESSION['user_name']; 
                                }
                                ?>
                            </span>
                            <span>
                                <?php 
                                if (isset($_SESSION['user_mail']))
                                {
                                    echo $_SESSION['user_mail']; 
                                }
                                ?>
                            </span>
                        </div>
                        <a href="/logout">Se déconnecter</a>
                    </div>
                    <?php
                            if (isset($success))
                            {
                                echo "<p style='color:green'>" . $success . "</p>";
                            }
                        ?>
                    <div class="section12__gestion__profil">
                        <h2>Gestion</h2>
                        <form method="post" enctype="multipart/form-data">
                        <div class="section12__gestion__profil__pp">
                            <?php
                            if (isset($_SESSION['user_pp']))
                            {
                                echo '<img src="./assets/IMG/PP/' . $_SESSION['user_pp'] . '" id ="output" alt="Photo_de_profil">'; 
                            }
                            ?>
                            <input type="file" name="user_pp" accept="image/*" onchange="loadFile(event)" class="input_pp">
                            <script>
                            var loadFile = function(event) {
                                var output = document.getElementById('output');
                                output.src = URL.createObjectURL(event.target.files[0]);
                            };
                            </script>

                        </div>
                        <?php
                            if (isset($error_pp))
                            {
                                echo "<p style='color:red'>" . $error_pp . "</p>";
                            }
                        ?>
                        <div class="section12__gestion__profil__infos">
                            <div class="input-data2">
                                <input type="text" name='user_name' placeholder=<?php if (isset($_SESSION['user_name'])) { echo $_SESSION['user_name']; } ?> onkeydown="if(event.keyCode==32) return false;">
                                <div class="underline2"></div>
                                <?php
                                    if (isset($error_nickname))
                                    {
                                        echo "<p style='color:red'>" . $error_nickname . "</p>";
                                    }
                                ?>
                            </div>
                        </div>
                        <button type="submit" name="Save">Enregistrer</button>
                        </form>
                    </div>
                </div>
            </div>

        </section>