<!-- Start UberGallery <?php echo UberGallery::VERSION; ?> - Copyright (c) <?php echo date('Y'); ?> Chris Kankiewicz (http://www.ChrisKankiewicz.com) -->
<div id="galleryWrapper">
    
    <?php if (!empty($images) && $stats['total_images'] > 0): ?>
        
        <ul id="galleryList" class="clearfix">
            
            <?php foreach ($images as $image): ?>
                <li><a href="<?php echo $image['file_path']; ?>" title="<?php echo $image['file_title']; ?>" rel="<?php echo $relText; ?>"><img src="<?php echo $image['thumb_path']; ?>" alt="<?php echo $image['file_title']; ?>"/></a></li>
            <?php endforeach; ?>
            
        </ul>
        
    <?php else: ?>
    
        <p>No images found.</p>
    
    <?php endif; ?>
    
    
    <?php if ($stats['total_pages'] > 1): ?>
        <div id="galleryFooter" class="clearfix">

            
            <ul id="galleryPagination">
            
                <?php foreach ($paginator as $item): ?>
                    <li class="<?php echo $item['class']; ?>">
                        <?php if (!empty($item['href'])): ?>
                            <a href="<?php echo $item['href']; ?>&album=<?php echo $_GET['album']; ?>"><?php echo $item['text']; ?></a>
                        <?php else: ?>
                            <?php echo $item['text']; ?>
                        <?php endif; ?>
                    </li>
                <?php endforeach; ?>
            
            </ul>
            

        </div>
    <?php endif; ?>
    
</div>
<!-- End UberGallery - Distributed under the MIT license: http://www.opensource.org/licenses/mit-license.php -->