      <div id="heading-breadcrumbs">
        <div class="container">
          <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7">
              <h1 class="h2">History Pembelian</h1>
            </div>
            <div class="col-md-5">
              <ul class="breadcrumb d-flex justify-content-end">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">History Pembelian</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div id="content">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="box">
              <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Total</th>
                    <th scope="col">Date</th>
                    <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($history as $h) { ?>
                    <tr>
                    <th scope="row"><?php echo $h->id_order; ?></th>
                    <td><?php echo $h->amount; ?></td>
                    <td><?php echo $h->order_date; ?></td>
                    <td><?php echo $h->order_status; ?></td>
                    </tr>
                <?php } ?>
                </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>