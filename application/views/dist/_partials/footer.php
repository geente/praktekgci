<?php
defined('BASEPATH') or exit('No direct script access allowed');

if ($this->session->userdata('authenticated')) {
} else {
  redirect(base_url('auth'));
}
?>
<footer class="main-footer">
  <div class="footer-left">
    Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
  </div>
  <div class="footer-right">

  </div>
</footer>
</div>
</div>

<?php $this->load->view('dist/_partials/js'); ?>