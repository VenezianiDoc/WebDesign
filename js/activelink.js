$(function() {
    var url = window.location.href;

// Will only work if string in href matches with location
    $('a[href="'+ url +'"]').addClass('active');

// Will also work for relative and absolute hrefs
    $('a').filter(function() {
        return this.href == url;
    }).addClass('active');
});