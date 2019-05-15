<?php
echo $this->pagination->create_links('Last');
echo '<pre>';
print_r($lionel);
echo base_url();
echo '<br/>';
echo site_url();
echo '<br/>';
echo url_title('Hỗ trợ chuyển sang một trang được chỉ định.');
echo '<br/>';
echo anchor('news/local/123', 'My News', 'title="News title"');
echo '<pre/>';