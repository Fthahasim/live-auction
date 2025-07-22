
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ env('app_name') }}</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body { background: #FDFDFC; color: #1b1b18;}
    .hero-section {background:#fff; border-radius: 1rem;}
    .shadow-md {box-shadow: 0 4px 18px rgba(0,0,0,0.08);}
    .main-red { background-color: #dc2626; }
    .main-red:hover { background-color: #b91c1c; }
    .main-red-outline { border-color: #dc2626 !important; color: #dc2626 !important; }
    .main-red-outline:hover { background: #fef2f2 !important; }
  </style>
</head>
<body class="min-vh-100 d-flex flex-column">

  <!-- Header -->
  <header class="container-lg my-4">
    <nav class="d-flex justify-content-end gap-3">
      <!-- Replace with server logic for auth when using Laravel -->
      <a href="/login" class="btn btn-link text-dark px-4 py-2">Log in</a>
      <a href="/register" class="btn btn-outline-dark px-4 py-2">Register</a>
      <!-- If authenticated:
      <a href="/dashboard" class="btn btn-outline-dark px-4 py-2">Dashboard</a>
      -->
    </nav>
  </header>

  <!-- Main Content -->
  <main class="flex-grow-1 d-flex flex-column align-items-center w-100">
    <!-- Hero Section -->
    <section class="hero-section shadow-md w-100" style="max-width:680px;margin-top:3rem;padding:3rem 1rem" >
      <h1 class="display-5 fw-bold mb-3 text-center">Bid Live. Win Big.</h1>
      <p class="lead mb-4 text-center text-secondary">Join real-time auctions &amp; win unique items!</p>
      <div class="d-flex flex-wrap justify-content-center gap-3">
        <a href="/register" class="btn main-red text-white px-4 py-2 shadow">Start Bidding</a>
        <a href="#how" class="btn main-red-outline border px-4 py-2">Learn How It Works</a>
      </div>
    </section>

    <!-- Live Auctions Preview -->
    <section class="container-xl w-100 py-5 px-3" id="live-auctions">
      <!-- Replace with real auction grid or carousel as needed -->
      <div class="text-center text-muted py-5">
        <em>[Live auctions carousel/grid goes here]</em>
      </div>
    </section>

    <!-- More sections: How It Works, Features, etc. -->
  </main>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>