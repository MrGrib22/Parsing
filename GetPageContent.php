<?php

require_once 'Factory/CurlContentFactory.php';
require_once 'Factory/FileGetContentFactory.php';
ini_set('display_errors', 0);

try {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $url = $_POST["url"];

        function getPageContent(Factory $factory, string $url): string
        {
            $fetch = $factory->createContentFetch();
            return $fetch->fetch($url);
        }

        $curlContent = new CurlContentFactory();

        if (getPageContent($curlContent, $url) != null) {
            echo"<title>Содержимое страницы</title>";
            echo "<h1> Содержимое страницы (cURL):</h1>";
            echo "<pre>" . htmlspecialchars(getPageContent($curlContent, $url)) . "</pre>";

        } else {
            echo "Не удалось получить код с url";
        }
        $fileContent = new FileGetContentFactory();

        if (getPageContent($fileContent, $url) != null) {

            echo"<title>Содержимое страницы</title>";
            echo "<h2>Содержимое страницы (file_get_contents):</h2>";
            echo "<pre>" . htmlspecialchars(getPageContent($fileContent, $url)) . "</pre>";

        } else {
            echo"<title>Ошибка!</title>";
            echo "Не удалось получить код с url";
        }
    }
} catch (\Exception $exception) {
    echo "Не удалось получить код страницы или введен некорректный url!";
}
