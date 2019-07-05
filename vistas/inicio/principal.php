<div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
            <p>A free and modular admin template</p>
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li><a href="#">Dashboard</a></li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <h3 class="card-title">Cantidad Productos</h3>
                <p><?php $p=$this->modelo->Cantidad()?>
                <?=$p->Cantidad?>   
              </p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card">
              <h3 class="card-title">Compatibility with frameworks</h3>
              
            </div>
          </div>
        </div>
      </div>
    </div>