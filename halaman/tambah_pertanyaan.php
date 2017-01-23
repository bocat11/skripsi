<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>Tambah Pertanyaan</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <br/>
            <form action="">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Pertanyaan</label>
                    <textarea name="name" rows="8" cols="80" class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                    <button type="button" class="btn btn-success btn-block">Simpan</button>
                    <a href="index.php?hal=list-pertanyaan" class="btn btn-warning btn-block">Cancel</a>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Jenis Pertanyaan</label>
                    <select class="form-control" name="jenis_pertanyaan" onchange="pilihSelect(this);">
                      <option value="text">text</option>
                      <option value="textarea">textarea</option>
                      <option value="select">select</option>
                    </select>
                  </div>
                  <div id="forSelect" style="display:none">
                    <?php
                    for ($i=1; $i < 5; $i++) {
                    ?>
                    <div class="form-group" >
                      <input type="text" name="valSelected[]" class="form-control" placeholder="Pilihan <?php echo $i ?>">
                    </div>
                    <?php
                    }
                    ?>
                  </div>
                </div>
              </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
  // $(document).ready(function(){
  //
  // });
  //
  function pilihSelect(sel){
    if (sel.value == "select") {
      $('#forSelect').show();
    } else {
      $('#forSelect').hide();
    }
  }
</script>
