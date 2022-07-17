<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persist bg Button</title>
</head>
<body>

<style>
    ul {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
        justify-content: space-between;
    }

    ul li {
        background-color: aquamarine;
        width: 100%;
        margin-right: 2px;
    }
</style>

    <nav>
        <ul>
            <li class="menu-link" data-url="/"><a href="/">Home</a></li>
            <li class="menu-link" data-url="/about"><a href="/about">About</a></li>
            <li class="menu-link" data-url="/products"><a href="/products">Products</a></li>
            <li class="menu-link" data-url="/contact"><a href="/contact">Contact</a></li>
        </ul>
    </nav>

    <?php echo $this->section('content')?>

    <script>
        window.onload = function(){
            const menu_links = document.querySelectorAll('.menu-link');
            const linkSessionStorage = sessionStorage.getItem('link');
            let startLink = 0;
            (linkSessionStorage) ?
                startLink = linkSessionStorage:
                sessionStorage.setItem('link', 0);

            menu_links[startLink].style.backgroundColor = 'red';    

            menu_links.forEach((button, key) => {
                button.addEventListener('click', event => {
                    event.preventDefault();

                    let beforeLink = sessionStorage.getItem('link');

                    menu_links[beforeLink].style.backgroundColor = 'aquamarine';

                    menu_links[key].style.backgroundColor = 'red';

                    sessionStorage.setItem('link', key);

                    window.location.href = button.dataset.url;
                });
            })
        }
    </script>

</body>
</html>