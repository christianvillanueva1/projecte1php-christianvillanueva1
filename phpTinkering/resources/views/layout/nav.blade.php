<header>
    <div class="logo">
        <a href="/" class="neu-button">Christian V. L.</a>
    </div>
    <nav>
        <a href="/albums">ALBUMS</a>
        <a href="/films">PELICULES</a>
    </nav>
    <br>
</header>

<style>
    header{
        position: fixed;
        top: 0;
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: black;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        width: 100%;
        height: 100px;
        padding: 20px;



        nav{
            width: 300px;
            display: flex;
            justify-content: space-between;


            a{
                color: white;
                font-weight: bold;
                text-decoration: none;
            }

            a:hover{
                color: #ffcc00;
                transform: scale(1.1);
            }
        }
    }
    .neu-button {
        background-color: #e0e0e0;
        border-radius: 50px;
        box-shadow: inset 4px 4px 10px #bcbcbc, inset -4px -4px 10px #ffffff;
        color: #4d4d4d;
        cursor: pointer;
        font-size: 12px;
        padding: 15px 20px;
        transition: all 0.2s ease-in-out;
        border: 2px solid rgb(206, 206, 206);
    }

    .neu-button:hover {
        box-shadow: inset 2px 2px 5px #bcbcbc, inset -2px -2px 5px #ffffff, 2px 2px 5px #bcbcbc, -2px -2px 5px #ffffff;
    }

    .neu-button:focus {
        outline: none;
        box-shadow: inset 2px 2px 5px #bcbcbc, inset -2px -2px 5px #ffffff, 2px 2px 5px #bcbcbc, -2px -2px 5px #ffffff;
    }

</style>