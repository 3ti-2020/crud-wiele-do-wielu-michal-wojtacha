<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
    <script src="https://kit.fontawesome.com/4fb762f9bd.js" crossorigin="anonymous"></script>
</head>
<body>
    <div id="headik" class="headik">
    <a href="https://github.com/3ti-2020/crud-wiele-do-wielu-michal-wojtacha" class="gthb"><i class="fab fa-github"></i>GITHUB</a>
    <form action="log/login.php" method="post">
        <p>Nazwa użytkownika</p>
        <input type="text" name="login">
        <p>Hasło</p>
        <input type="text" name="haslo"><br>
        <input type="submit" value="ZALOGUJ">
    </form>
    </div>
    <div id="head" class="head"><h1>Michał Wojtacha grupa 1</h1>
    <a href="card/index.html" class="karty"><i class="fas fa-address-card"></i>KARTY</a>
    </div>
    <div id="left" class="left">
    <p>Dodawanie i usuwanie z bazy ukryte za logowaniem.</p>
    <p>Login: a</p>
    <p>Hasło: a</p>
    <div class="przerwa"></div>
    <div><button id="bgbtn">Jaśniej</button>
    <button id="bgbtn1">Ciemniej</button>
    </div>
    </div>
    <div id="main" class="main">
    <div class="todo">
            <div style="width: 200px; height: 300px;">
        <div class="cnt">
            <form class="form" id="todoForm">
                <div class="form-row">
                    <label class="form-label" for="todoMessage">Lista TO DO</label>
                    <textarea class="form-message" name="todoMessage" id="todoMessage"></textarea>
                </div>
                <div class="form-row">
                    <button type="submit" class="button form-button">Dodaj</button>
                </div>
            </form>
            
            <section class="list-cnt">
                
                <div class="list" id="todoList">
                </div>
            </section>
        </div>
        
        <template id="elementTemplate">
        <div class="element-text"></div>
            <div class="element-bar">
                <h3 class="element-date"></h3>
                <button class="element-delete" title="Usuń zadanie">
                   Usuń zadanie
                </button>
            </div>
        </template>
        </div>
    </div>
        <script src="script.js"></script>
    </div>
</body>
</html>