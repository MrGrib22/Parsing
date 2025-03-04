<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Получение содержимого страницы</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    
    <main>
        <div class="row">
            <div class="col-md-9">
                <div class="offset-5">
                    <form action="GetPageContent.php" method="post">
                        <label for="parsingUrl" class="form-label">Введите url страницы</label>
                        <div class="input-group">
                        <input type="text" name="url" id="parsingUrl" class="form-control" aria-describedby="parsingUrlHelp">
                        <button class="btn btn-success" type="submit">Получить содержимое</button>
                        </div>
                        <div id="parsingUrlHelp" class="form-text">
                            Пример: https://www.example.com
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

</body>
</html>
