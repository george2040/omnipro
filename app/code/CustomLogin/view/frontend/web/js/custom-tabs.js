require(
    [
        'jquery',
        'tabs'
    ],
    function($) 
    {
        $(function() {
        $('#tab_element').tabs({
            active: 'custom_content_tab1',
            destination: '#content_tab',
            shadowTabs: []        
        });
    });

    }
);