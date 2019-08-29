
<?php
    // 00. PHP 标签内，注释才有效果
    // 标签之外的注释，只是当做一般文本，直接输出
    echo "Hello, PHP world!\n";
?>

// 01. PHP 标记 外的注释，以文本输出
<?php
    echo "This is Next Pragram";

?>

// 02. 不鼓励使用的标记（短标记）只有通过激活 php.ini 中的 short_open_tag 配置指令或者在编译 PHP 时使用了配置选项 --enable-short-tags 时才能使用短标记。
<?

echo "Php short mark";
?>


<p> HTML Mark </p>
<?php echo "Mixed PHP file" ?>
<p> HTML Other Mark </p>

// 03 PHP 从HTML分离，4种方式标记开始和结束
// 03-1<?php ?> 最常用
// 03-2 <script language="php"> </script>
// 03-3 <? ?> 短标记
// 04-4 <% echo "PHP pragrah "%> asp 风格，不常用
