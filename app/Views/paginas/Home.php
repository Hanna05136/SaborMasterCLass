<?= $this->extend('Plantilla/layout') ?>
<?= $this->section('contenido') ?>
<!-- Hero -->
  <section class="hero-img-section d-flex align-items-center justify-content-center text-center text-white">
    <div class="overlay"></div>
    <div class="hero-content position-relative z-1">
      <h1 class="display-4 fw-bold">Descubre el CHEF que llevas dentro </h1>
      <p class="lead pulse">
        <i class="fas fa-utensils me-2"></i>
        Cursos online de alta calidad impartidos por expertos gastronómicos
        <i class="fas fa-utensils me-2"></i>
      </p>
    </div>
  </section>

  <main class="container mt-1 pt-1 mb-3">
    <div class="row">
      <!-- Noticias -->
      <div class="col-md-4">
        <h2 class="fw-bold mb-4">Noticias Gastronómicas</h2>
        <p class="text-muted mb-4">Mantente al día con las tendencias y novedades del mundo culinario.</p>

        <div class="row row-cols-1 row-cols-md-2 g-3 noticia-row">
          <!-- Noticia 1 -->
          <div class="col">
            <div class="card h-100">
              <div class="card-body">
                <h6 class="card-title">La Cocina Sostenible Gana Terreno</h6>
                <p class="card-text text-muted small">Restaurantes y chefs apuestan por ingredientes locales y métodos ecológicos.</p>
              </div>
            </div>
          </div>

          <!-- Noticia 2 -->
          <div class="col">
            <div class="card h-100">
              <div class="card-body">
                <h6 class="card-title">Nuevas Tendencias en Platos de Autor</h6>
                <p class="card-text text-muted small">Fusión de sabores asiáticos y latinos marcarán la pauta en 2025.</p>
              </div>
            </div>
          </div>

          <!-- Noticia 3 -->
          <div class="col">
            <div class="card h-100">
              <div class="card-body">
                <h6 class="card-title">Master Class Lanza Nuevos Cursos</h6>
                <p class="card-text text-muted small">Aprende de los mejores chefs con programas para todos los niveles.</p>
              </div>
            </div>
          </div>

          <!-- Noticia 4 -->
          <div class="col">
            <div class="card h-100">
              <div class="card-body">
                <h6 class="card-title">Panadería Artesanal en Auge</h6>
                <p class="card-text text-muted small">El pan de masa madre sigue conquistando a los amantes de lo natural.</p>
              </div>
            </div>
          </div>

          <!-- Noticia 5 -->
          <div class="col">
            <div class="card h-100">
              <div class="card-body">
                <h6 class="card-title">Evento Gastronómico del Año</h6>
                <p class="card-text text-muted small">No te pierdas la feria culinaria más grande de la región.</p>
              </div>
            </div>
          </div>

          <!-- Noticia 6 -->
          <div class="col">
            <div class="card h-100">
              <div class="card-body">
                <h6 class="card-title">Nos visita el Chef Nelson Rodríguez</h6>
                <p class="card-text text-muted small">El chef protagonista del programa de concursos nos da tips para mejorar en la cocina.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Cursos -->
      <div class="col-md-8">
        <div class="d-flex justify-content-between align-items-center mb-4">
          <h2 class="fw-bold">Cursos Destacados</h2>
          <div class="input-group w-50">
            <input type="text" class="form-control form-busqueda" placeholder="Buscar cursos...">
            <span class="input-group-text bg-white border-start-0"><i class="fas fa-search text-muted"></i></span>
          </div>
        </div>

        <div class="row g-4">
          <!-- Tarjetas de cursos -->
          <!-- Curso 1 -->
          <div class="col-md-6">
            <div class="card curso-card h-100">
              <img src="imagenes/reposteria_creativa.jpg" class="card-img-top curso-img" alt="Repostería">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-2">
                  <h6 class="card-title">Repostería Creativa</h6>
                  <span class="badge bg-warning text-dark"><i class="fas fa-star"></i> 5.0</span>
                </div>
                <p class="card-text text-white small">🍰 Domina el arte de la repostería con técnicas profesionales para crear postres irresistibles.</p>
                <p class="fw-bold">$295.000</p>
                <a href=<?php echo base_url('/login'); ?> class="btn btn-purple"> <i class="fas fa-plus"></i> </a>
              </div>
            </div>
          </div>

          <!-- Curso 2 -->
          <div class="col-md-6">
            <div class="card curso-card h-100">
              <img src="imagenes/cocina_internacional.jpg" class="card-img-top curso-img" alt="Internacional">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-2">
                  <h6 class="card-title">Cocina internacional</h6>
                  <span class="badge bg-warning text-dark"><i class="fas fa-star"></i> 5.0</span>
                </div>
                <p class="card-text text-white small">🌍 Aprende a preparar platos icónicos de diferentes culturas y lleva tu cocina a otro nivel.</p>
                <p class="fw-bold">$134.000</p>
                <a href=<?php echo base_url('/login'); ?> class="btn btn-purple"> <i class="fas fa-plus"></i> </a>
              </div>
            </div>
          </div>

          <!-- Curso 3 -->
          <div class="col-md-6">
            <div class="card curso-card h-100">
              <img src="imagenes/cocina_japonesa.jpg" class="card-img-top curso-img" alt="Japonesa">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-2">
                  <h6 class="card-title">Cocina Japonesa</h6>
                  <span class="badge bg-warning text-dark"><i class="fas fa-star"></i> 5.0</span>
                </div>
                <p class="card-text text-white small">🍣 Aprende sushi, ramen y otras delicias japonesas con técnicas profesionales.</p>
                <p class="fw-bold">$154.000</p>
                <button class="btn btn-purple" onclick="window.location.href='<?php base_url('/login'); ?>'"><i class="fas fa-plus"></i>
              </div>
            </div>
          </div>

          <!-- Curso 4 -->
          <div class="col-md-6">
            <div class="card curso-card h-100">
              <img src="imagenes/parrila_bbq.jpg" class="card-img-top curso-img" alt="Parrilla">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-2">
                  <h6 clazss="card-title">Parrilla BBQ</h6>
                  <span class="badge bg-warning text-dark"><i class="fas fa-star"></i> 5.0</span>
                </div>
                <p class="card-text text-white small">🔥 Aprende técnicas de parrilla, ahumado y salsas irresistibles.</p>
                <p class="fw-bold">$235.000</p>
                <a href=<?php echo base_url('/login'); ?> class="btn btn-purple"> <i class="fas fa-plus"></i> </a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </main>
<?= $this->endSection() ?>