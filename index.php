<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="scripts/index.css">
    <title>BestraXstudio | site</title>
</head>
<body>

    <div class="header">
        <div class="logo">
            <img src="img/logo.png" alt="logo" width="100%" style="user-select: none;">
        </div>

        <div class="nav-buttons">
            <button class="nav-button" id="shop">товары</button>
            <button class="nav-button" id="news">новости</button>
        </div>
    </div>

    <div class="top-content">
        <div class="post">
			<img src="img/avatar.png" alt="avatar" width="64px" style="border-radius: 50px; user-select: none;">
            <div class="text">
                Два новых плагина от BXS на алхимика и стакера! Плагины похожи друг на друга конфигурацией и меню, первый плагин называется BestStacker, а второй BestAlchemist.
            </div>

            <div class="text" style="color: #D5A2FD">
                <br>
                Вы можете приобрести два этих плагина сразу по выгодной цене, всего за 500Р!
            </div>

            <div class="bottom">
                <div class="btn">
                    <img src="img/like.svg" alt="like" width="20%" style="user-select: none;">
                    <div class="int" style="user-select: none;">256</div>
                </div>
                <div class="btn">
                    <img src="img/comment.svg" alt="comment" width="20%" style="user-select: none;">
                    <div class="int" style="user-select: none;">256</div>
                </div>
            </div>
        </div>
        <div class="banner">
            <img src="img/banner.png" alt="banner" width="100%" style="user-select: none;">
        </div>
    </div>

    <div class="shop">
        <div class="categories">
            <span class="title">товары:</span>

            <?php foreach ($config["categories"] as $key => $value): ?>
                <li class="<?= ($value['default'] ? 'active' : '') ?>" data-id="<?= $key ?>">
                    <span class="block-left"><i class="fa fa-tags "></i></span>
                    <span class="block-right"><?= $value['title'] ?></span>
                </li>
            <?php endforeach; ?>
        </div>

        <div class="products">
            <?php foreach ($config["categories"] as $key => $value): ?>
                <div class="tab-id <?= (($value['default']) ? "active" : "") ?>" data-id="<?= $key ?>">
                    <div class="items">
                        <?php foreach ($value['products'] as $k => $v): ?>
                            <div class="item-id">
                                <div class="image" style="background-image: url('<?= $v['image'] ?>');"></div>
								<div class="bottom">
									<div class="title"><?= $v['title'] ?></div>
									<div class="price"><?= $v['price'] ?></div>
								</div>
								
								<div class="rate">
									<a href="/" class="close">+</a>
									<div class="all">
										<div class="title"><?= $v['title'] ?></div>
										<div class="price"><?= $v['price'] ?></div>
										<div class="deskript"><?= $v['deskript'] ?></div>
											
										<div class="buy"><a href="https://vk.com/im?sel=-209180254" style="text-decoration: none;color: #848484;">Купить</a></div>
									</div>
								</div>
                            </div>
							
							<div id="rate">
								<div id="okno"><br>
									
								</div>
							</div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
	
	<div class="tops">
		<div class="arrow-left"><</div>
		
		<div class="cards">
			<div class="card">
				<div class="left">
					<div class="text">lorem islum lorem islum  lorem islum  lorem islum  lorem islum  lorem islum  lorem islum  lorem islum  lorem islum </div>
					<div class="line"></div>
					<div class="winers">Дмитрий Абрамов</div>
				</div>
				<div class="right">
					<div class="img">
						<img src="img/k1.png" alt="top1" width="100%" style="user-select: none;">
					</div>
					<div class="data">1994 - 27.08.2023</div>
				</div>
			</div>
			<div class="card">
				<div class="left">
					<div class="text">lorem islum lorem islum  lorem islum  lorem islum  lorem islum  lorem islum  lorem islum  lorem islum  lorem islum </div>
					<div class="line"></div>
					<div class="winers">Дмитрий Абрамов</div>
				</div>
				<div class="right">
					<div class="img">
						<img src="img/k1.png" alt="top1" width="100%" style="user-select: none;">
					</div>
					<div class="data">1994 - 27.08.2023</div>
				</div>
			</div>
			<div class="card">
				<div class="left">
					<div class="text">lorem islum lorem islum  lorem islum  lorem islum  lorem islum  lorem islum  lorem islum  lorem islum  lorem islum </div>
					<div class="line"></div>
					<div class="winers">Дмитрий Абрамов</div>
				</div>
				<div class="right">
					<div class="img">
						<img src="img/k1.png" alt="top1" width="100%" style="user-select: none;">
					</div>
					<div class="data">1994 - 27.08.2023</div>
				</div>
			</div>
			<div class="end">
				<div class="end">End</div>
			</div>
		</div>
		
		<div class="arrow-right">></div>
	</div>

    <footer>
        <div class="footer">
            <div class="logo">
                <img src="img/logo.png" alt="logo" width="100%">
            </div>

            <div class="links">
                <div class="link"><a href="https://vk.com/bestraxstudio" style="text-decoration: none;color: #848484;">группа вконтакте</a></div>
                <div class="link"><a href="/" style="text-decoration: none;color: #848484;">сайт</a></div>
            </div>
        </div>
    </footer>

    <script src="scripts/index.js"></script>

</body>
</html>