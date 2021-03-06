<?php
$category = new Category();
$arrCategory = $category->getAll();
?>

<nav class="navbar navbar-expand-sm navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="<?php echo urlPage == '' ? '#' : urlPage . 'index.php' ?>">
            <div class="logo top">
                <span>Group</span>
                <span>I</span>
            </div>
        </a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
            aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <?php
                foreach ($arrCategory as $item) {
                    
                        echo '
                            <li class="nav-item">
                                <a class="nav-link" href="' . urlPage . 'pages/search.php?idCategory=' . $item['id_category'] . '">
                                    <span class="hv-l category" data-id="category-' . $item['id_category'] . '">' . $item['NAME'] . '</span>
                                </a>
                            </li>
                        ';
                    }
                ?>
            </ul>

            <form action="<?php echo urlPage . 'pages/search.php' ?>" class="form-inline my-2 my-lg-0">
                <input name="key" class="form-control mr-sm-2" type="text" placeholder="Tìm theo tên bài...">
                <button class="btn btn-danger my-2 my-sm-0" type="submit">Search</button>                
            </form>
            <form action="<?php echo urlPage . 'admin/login/dangnhap.php' ?>" class="form-inline my-2 my-lg-0">
                <button class="btn btn-danger my-2 my-sm-0" type="submit">Đăng Nhập</button>
            </form>
            
        </div>
    </div>
</nav>