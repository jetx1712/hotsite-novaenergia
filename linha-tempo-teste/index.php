<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Linha do Tempo Horizontal com Controles de Navegação</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .timeline-item {
            background: #f9f9f9;
            padding: 20px;
            border-radius: 5px;
        }
        .timeline-item h3 {
            margin-top: 0;
        }
    </style>
</head>
<body>

<div class="container col-10">
    <div id="timelineCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row">
                    <div class="col-md-4">
                        <div class="timeline-item">
                            <h3>Evento 1</h3>
                            <p>Descrição do Evento 1</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="timeline-item">
                            <h3>Evento 2</h3>
                            <p>Descrição do Evento 2</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="timeline-item">
                            <h3>Evento 3</h3>
                            <p>Descrição do Evento 3</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row">
                    <div class="col-md-4">
                        <div class="timeline-item">
                            <h3>Evento 4</h3>
                            <p>Descrição do Evento 4</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="timeline-item">
                            <h3>Evento 5</h3>
                            <p>Descrição do Evento 5</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="timeline-item">
                            <h3>Evento 6</h3>
                            <p>Descrição do Evento 6</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#timelineCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#timelineCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
