<!DOCTYPE html>
<html>
<head>
    <title>Haber Sitesi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Haber Sitesi</h1>
    </header>
    <nav>
        <ul>
            <li><a href="index.php">Ana Sayfa</a></li>
            <li><a href="haberler.php">Haberler</a></li>
            <li><a href="iletisim.php">İletişim</a></li>
        </ul>
    </nav>
    <main>
        <section>
            <h2>Son Haberler</h2>
            <?php
                $haberler = array(
                    array(
                        'baslik' => 'Haber Başlığı 1',
                        'icerik' => 'Haber içeriği 1',
                        'tarih' => '2023-05-21',
                        'resim' => 'futbolcu1.jpg',
                        'futbolcu' => 'Lionel Messi',
                        'bilgi' => 'Lionel Messi, Arjantinli futbolcu...'
                    ),
                    array(
                        'baslik' => 'Haber Başlığı 2',
                        'icerik' => 'Haber içeriği 2',
                        'tarih' => '2023-05-20',
                        'resim' => 'futbolcu2.jpg',
                        'futbolcu' => 'Cristiano Ronaldo',
                        'bilgi' => 'Cristiano Ronaldo, Portekizli futbolcu...'
                    ),
                    array(
                        'baslik' => 'Haber Başlığı 3',
                        'icerik' => 'Haber içeriği 3',
                        'tarih' => '2023-05-19',
                        'resim' => 'futbolcu3.jpg',
                        'futbolcu' => 'Neymar',
                        'bilgi' => 'Neymar, Brezilyalı futbolcu...'
                    ),
                    array(
                        'baslik' => 'Haber Başlığı 4',
                        'icerik' => 'Haber içeriği 4',
                        'tarih' => '2023-05-18',
                        'resim' => 'futbolcu4.jpg',
                        'futbolcu' => 'Kylian Mbappe',
                        'bilgi' => 'Kylian Mbappe, Fransız futbolcu...'
                    ),
                    array(
                        'baslik' => 'Haber Başlığı 5',
                        'icerik' => 'Haber içeriği 5',
                        'tarih' => '2023-05-17',
                        'resim' => 'futbolcu5.jpg',
                        'futbolcu' => 'Robert Lewandowski',
                        'bilgi' => 'Robert Lewandowski, Polonyalı futbolcu...'
                    ),
                    array(
                        'baslik' => 'Haber Başlığı 6',
                        'icerik' => 'Haber içeriği 6',
                        'tarih' => '2023-05-16',
                        'resim' => 'futbolcu6.jpg',
                        'futbolcu' => 'Mohamed Salah',
                        'bilgi' => 'Mohamed Salah, Mısırlı futbolcu...'
                    ),
                    array(
                        'baslik' => 'Haber Başlığı ',
                        'icerik' => 'Haber içeriği 7',
                        'tarih' => '2023-05-15',
                        'resim' => 'futbolcu7.jpg',
                        'futbolcu' => 'Sergio Ramos',
                        'bilgi' => 'Sergio Ramos, İspanyol futbolcu...'
                    ),
                );

                foreach ($haberler as $haber) {
                    echo '<div class="haber">';
                    echo '<h3>' . $haber['baslik'] . '</h3>';
                    echo '<img src="' . $haber['resim'] . '" alt="' . $haber['futbolcu'] . '">';
                    echo '<p>' . $haber['bilgi'] . '</p>';
                    echo '<p>Tarih: ' . $haber['tarih'] . '</p>';
                    echo '</div>';
                }
            ?>
        </section>
    </main>
    <footer>
        &copy; 2023 Haber Sitesi. Tüm hakları saklıdır.
    </footer>
</body>
</html>
