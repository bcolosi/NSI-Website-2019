/*!
 *  File Name:      jquery.custom.js
 *  Description:    Custom Javascript/jQuery Functions for the NSI Website
 *  Author:         Brian Colosi
 * 
 */


// Javascript **********************************************************


var isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);

// Get parameters from url
function getUrlParams(){
    var params = {};
    window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m, key, value) {
        params[key] = value;
    });
    
    return params;
}

// Stores table sorting direction info
// Set 'defaultColSort to -1 for no default sorting
function tblSortDir(){
    this.asc = 1;
    this.lastSortedColNum = -1;
}

// Determines sorting order for sort function
function tableSortDirectionHelper(a, b, sortPriority, i, dir){
    if(a[sortPriority[i]] == b[sortPriority[i]]){
        return i == sortPriority.length - 1 ? 0 : tableSortDirectionHelper(a, b, sortPriority, ++i, dir);
    }
    else if(a[sortPriority[i]] > b[sortPriority[i]]){
        return dir.asc;
    }
    else {
        return -1 * dir.asc;
    }
}

// Adds commas to input numbers
function numberWithCommas(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}

// Formats phone numbers
function formatPhoneNum(phoneNum){
    var cleaned = phoneNum.toString().replace(/\D/g, '');
    var match = cleaned.match(/^(\d{3})(\d{3})(\d{4})$/);
    if (match) {
        return '(' + match[1] + ') ' + match[2] + '-' + match[3];
    }
    return phoneNum;
}

// Syncs col header widths with corresponding table cell widths
function sync_col_width(tableBodyId, tableHeaderId){
    var headerArray = document.getElementById(tableHeaderId).rows[0]
    var bodyArray = document.getElementById(tableBodyId).rows[0];
    if(headerArray != null || bodyArray != null){
        for(var i = 0; i < headerArray.cells.length; i++){
            headerArray.cells[i].style.width = bodyArray.cells[i].offsetWidth + 'px';
        }
    }
    
    return;
}


// jQuery **************************************************************

;(function ($) {

    // Add logo to slicknav menu
    $.fn.formatMobileMenu = function(){
        var logo = '<div id="mobile-site-logo"><a href="/Home.php"><img src="/includes/images/nsi_logo.png"></a></div>';
        $('.slicknav_menu').prepend(logo);
    }

    // Lock scroll bar
    $.fn.lockScrollBar = function(){
        var scrollPos = { x: $(document).scrollLeft(), y: $(document).scrollTop() };
        $(this).css({
            top: -scrollPos.y + 'px',
            left: -scrollPos.x + 'px'
        }).addClass('scroll-lock');
        $('#site-header-banner').addClass('scroll-locked-site-header-banner').css({
            top: scrollPos.y + 'px'
        });
    }

    // Lock scroll bar
    $.fn.unlockScrollBar = function(){
        var scrollPos = $('body').position();
        $(this).removeClass('scroll-lock');
        $(document).scrollTop(-scrollPos.top);
        $(document).scrollLeft(-scrollPos.left);
        $('#site-header-banner').removeClass('scroll-locked-site-header-banner').css({
            top: ''
        });
    }

    // Open modal
    $.fn.openModal = function(){
        $(this).click(function(evt){
            evt.preventDefault();
            $('head').append('<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js"></script>');
            $('.modal').show();
            $('body').lockScrollBar();
            sync_col_width('table-list', 'table-list-header');
        });
    }

    // Close modal
    $.fn.closeModal = function(){
        $(this).click(function(){
            $('.modal').hide();
            $('body').unlockScrollBar();
        });
    }

    // Creates trigger for collapsible menu transitions
    $.fn.collapseObj = function(evt, activeClassName){
        $(this).on(evt, function(){
            var content = ($(this).children('.dropdown-content')[0] != null) ? $(this).children('.dropdown-content') : $(this).next();
            $(this).toggleClass(activeClassName);
            if(content.height()){
                content.height(0);
            }
            else{
                content.height(content.prop("scrollHeight"));
            }
        });
    };

    // Resizes the contents of the region one content boxes
    $.fn.homeRegOneContentBoxHandler = function(){
        var hospitalList = $('.hospital-content-list ul li');
        var nurseList = $('.nurse-content-list ul li');
        var hospitalListHalfPoint = Math.floor(hospitalList.length/2);
        var nurseListHalfPoint = Math.floor(nurseList.length/2);

        // Hospital box
        for(var i = 0; i < hospitalListHalfPoint; i++){
            var j = hospitalListHalfPoint + i;
            if(hospitalList.eq(i).height() > hospitalList.eq(j).height()){
                hospitalList.eq(j).height(hospitalList.eq(i).height());
            }
            else{
                hospitalList.eq(i).height(hospitalList.eq(j).height());
            }
        }

        // Nurses box
        for(var i = 0; i < nurseListHalfPoint; i++){
            var j = nurseListHalfPoint + i;
            if(nurseList.eq(i).height() > nurseList.eq(j).height()){
                nurseList.eq(j).height(nurseList.eq(i).height());
            }
            else{
                nurseList.eq(i).height(nurseList.eq(j).height());
            }
        }

        if(!isMobile){
            $('.hospital-content-list-img').css({height: $('.hospital-content-list').outerHeight()});
            $('.nurse-content-list-img').css({height: $('.nurse-content-list').outerHeight()});
        }
        
        $(window).resize(function(){
            $('.content-list ul li').css({ height: '' });
            // Hospital box
            for(var i = 0; i < hospitalListHalfPoint; i++){
                var j = hospitalListHalfPoint + i;
                if(hospitalList.eq(i).height() > hospitalList.eq(j).height()){
                    hospitalList.eq(j).height(hospitalList.eq(i).height());
                }
                else{
                    hospitalList.eq(i).height(hospitalList.eq(j).height());
                }
            }

            // Nurses box
            for(var i = 0; i < nurseListHalfPoint; i++){
                var j = nurseListHalfPoint + i;
                if(nurseList.eq(i).height() > nurseList.eq(j).height()){
                    nurseList.eq(j).height(nurseList.eq(i).height());
                }
                else{
                    nurseList.eq(i).height(nurseList.eq(j).height());
                }
            }

            if(!isMobile){
                $('.hospital-content-list-img').css({height: $('.hospital-content-list').outerHeight()});
                $('.nurse-content-list-img').css({height: $('.nurse-content-list').outerHeight()});
            }
        });
    }

    // Populates the job list from csv
    // Syncs col header width with cell width
    $.fn.listHandler = function(csv_path, bodyTableId, headerTableId, shareButtonsOn){
        // Reads data in from csv file and into a table
        $.ajax({
            type: "GET",
            url: csv_path,
            dataType: "text",
            success: function(data, unused, req){
                // Get data from csv file and put it in the table
                var csv_data = $.csv.toArrays(data);
                var tableBody = '';
                var stateColNum = -1;
                var incentiveColNum = -1;
                var unitColNum = -1;
                var lastMod = new Date(req.getResponseHeader("Last-Modified"));
                lastMod = (lastMod.getMonth() + 1) + '/' + lastMod.getDate() + '/' + lastMod.getFullYear();

                $('.last-updated').html('Last Updated: ' + lastMod);

                for(var row = 0; row < csv_data.length; row++){
                    var tableRow = '<tr>';
                    var cellData = csv_data[row];
                    var cellTypeOpen = (row == 0) ? '<th' : '<td';
                    var cellTypeClose = (row == 0) ? '<div class="sort-arrow-container"><div class="sort-arrow"></div></div></th>' : '</td>';
                    var shareLocation = window.location.href;
                    var shareDescription = (stateColNum != -1) ? ' in ' + cellData[stateColNum] + ' - ' + cellData[incentiveColNum] + 'Sign-on Bonus, ' + cellData[unitColNum] + ' Position' : '';
                    var shareTitle = 'NSI Nursing Opportunity' + shareDescription;
                    
                    for(var col = 0; col < cellData.length; col++){
                        var colNumLabel = '>';
                        if(row == 0){
                            if(cellData[col].toLowerCase() == 'state'){
                                stateColNum = col;      // Gets state column
                            }
                            if(cellData[col].toLowerCase() == 'incentive'){
                                incentiveColNum = col;      // Gets incentive column
                            }
                            if(cellData[col].toLowerCase() == 'unit'){
                                unitColNum = col;      // Gets unit column
                            }
                            colNumLabel = ' class="'+ cellData[col].toLowerCase() +'" data-col-num="'+ col +'">';
                        }
                        tableRow += cellTypeOpen + colNumLabel + cellData[col] + cellTypeClose;
                    }
                    
                    if(shareButtonsOn){
                        if(row == 0){
                            tableRow += '<th class="share-header">Share</th>';
                        }
                        else{
                            // Addthis
                            tableRow += '<td><div class="addthis_toolbox addthis_default_style addthis_32x32_style" addthis:url="'+shareLocation+'" addthis:title="'+shareTitle+'">';
                            
                            tableRow += '<a class="addthis_button_facebook hidden-xs hidden-sm"></a>';
                            tableRow += '<a class="addthis_button_twitter hidden-xs hidden-sm"></a>';
                            tableRow += '<a class="addthis_button_compact"></a>';
                            
                            tableRow += '</div></td>';
                        }
                    }
                    tableRow += '</tr>';
                    
                    if(row == 0){
                        $('#'+ bodyTableId +' thead').append(tableRow);
                        $('#'+ headerTableId +' thead').append(tableRow);
                    }
                    else{
                        tableBody += tableRow;
                    }

                    // Sync col header width with table cell widths
                    sync_col_width(bodyTableId, headerTableId);
                }
                $('#'+ bodyTableId +' tbody').append(tableBody);
                setTimeout(function(){
                    $('head').append('<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js"></script>');
                }, 250);
            }
        });
        
        // Sync header and cell widths on window resize
        $(window).resize(function(){
            sync_col_width(bodyTableId, headerTableId);
        });
    };

    // Sorts table by selected column and then by predetermined sub columns
    $.fn.tableSort = function(target_table_body_id, dir){
        setTimeout(function(){
            var stateCol = $('th.state').attr('data-col-num');            
            $('#table-list-header th:eq('+stateCol+')').click();
        }, 350);

        $(this).on('click', 'th', function(){
            var table = document.getElementById(target_table_body_id);
            var sortCol = $(this).attr('data-col-num');
            var stateCol = $('th.state').attr('data-col-num');
            var cityCol = $('th.city').attr('data-col-num');
            var locationCol = $('th.location').attr('data-col-num');
            var titleCol = $('th.title').attr('data-col-num');
            var tmpArry = [sortCol, stateCol, cityCol, locationCol, titleCol];
            var sortPriority = new Array();
            var arr = new Array();
            var rows = table.rows;
            var cells;

            // create sort priority list
            var validCols = 0;
            for(var i = 0; i < tmpArry.length; i++){
                if(tmpArry[i] == null || (i > 0 && tmpArry[i] == sortCol)){
                    continue;
                }
                else{
                    sortPriority[validCols] = tmpArry[i];
                    validCols++;
                }
            }

            // update sorting info and classes where needed
            if(sortCol == dir.lastSortedColNum){
                dir.asc = -1 * dir.asc;
                if(dir.asc < 0){
                    $(this).find('.sort-arrow').removeClass("sort-asc").addClass("sort-desc");
                    $('#table-list th:eq('+sortCol+')').find('.sort-arrow').removeClass("sort-asc").addClass("sort-desc");
                }
                else{
                    $(this).find('.sort-arrow').removeClass("sort-desc").addClass("sort-asc");
                    $('#table-list th:eq('+sortCol+')').find('.sort-arrow').removeClass("sort-desc").addClass("sort-asc");
                }
            }
            else{
                dir.lastSortedColNum = sortCol;
                dir.asc = 1;
                $('thead th .sort-arrow').removeClass("sort-asc sort-desc");
                $(this).find('.sort-arrow').addClass("sort-asc");
                $('#table-list th:eq('+sortCol+')').find('.sort-arrow').addClass("sort-asc");
            }
            sync_col_width('table-list-body', 'table-list-header');

            // fill the array with values from the table
            for(var i = 0; i < rows.length; i++){
                cells = rows[i].cells;
                arr[i] = new Array();
                for(var j = 0; j < cells.length; j++){
                    arr[i][j] = cells[j].innerHTML;
                }
            }

            // sort the array by the specified column number (sortCol) and order (asc)
            arr.sort(function(a, b){
                return tableSortDirectionHelper(a, b, sortPriority, 0, dir);
            });

            // turn array into html code
            for(var i = 0; i < rows.length; i++){
                arr[i] = "<td>"+arr[i].join("</td><td>")+"</td>";
            }
            table.innerHTML = "<tr>"+arr.join("</tr><tr>")+"</tr>";
        });
    };
    
    // Determines active and pending states and fills that state with color.
    // Updates and displays the current state that is being hovered over.
    // On a click, page jumps to the clicked state on the job list.
    $.fn.stateMapHandler = function(){
        var classNames = ".current-client, .pending-client";

        // Fills in list data for each state
        // Calculates which color a state should be
        var path = '/Documents/job_openings.csv';
        var targetTable = '.current-job-list';
        var stateClass = 'current-client';
        var status = 'current';
        for(var i = 0; i < 2; i++){
            if(i == 1){
                path = '/Documents/job_openings_coming_soon.csv';
                targetTable = '.pending-job-list';
                stateClass = 'pending-client';
                status = 'pending';
            }
            $.ajax({
                type: "GET",
                url: path,
                async: false,
                dataType: "text",
                success: function(data){
                    var csv_data = $.csv.toArrays(data);
                    var tableBody = '';
                    var stateColNum = -1;
                    var prevState = '';
                    for(var row = 0; row < csv_data.length; row++){
                        var tableRow = '<tr>';
                        var cellData = csv_data[row];
                        var cellTypeOpen = (row == 0) ? '<th' : '<td';
                        var cellTypeClose = (row == 0) ? '<div class="sort-arrow"></div></th>' : '</td>';

                        for(var col = 0; col < cellData.length; col++){
                            var colNumLabel = '>';
                            if(row == 0){
                                if(cellData[col].toLowerCase() == 'state'){
                                    stateColNum = col;      // Gets state column
                                }
                                colNumLabel = ' class="'+ cellData[col].toLowerCase() +'" data-col-num="'+ col +'">';
                            }
                            tableRow += cellTypeOpen + colNumLabel + cellData[col] + cellTypeClose;
                        }
                        if(i == 1){
                            if(row == 0){
                                tableRow += '<th>Status</th>';
                            }
                            else{
                                tableRow += '<td><strong>Coming Soon</strong></td>';
                            }
                        }
                        tableRow += '</tr>';
                        if(stateColNum == -1){
                            alert('ERROR: Unable to find state openings.');
                            return;
                        }
                        
                        if(row == 0){
                            $(targetTable+' #'+status+'-state-job-list-header thead').append(tableRow);
                            $(targetTable+' #'+status+'-state-job-list-body thead').append(tableRow);
                        }
                        else{
                            if(row == 1){
                                tableBody = '<tbody class="'+ cellData[stateColNum] +'">';
                            }
                            else if(prevState != cellData[stateColNum]){
                                tableBody += '</tbody><tbody class="'+ cellData[stateColNum] + '">';
                            }
                            tableBody += tableRow;
                        }
                        $('#job-map #' + cellData[stateColNum]).addClass(stateClass);
                        prevState = cellData[stateColNum];
                    }
                    $(targetTable+' #'+status+'-state-job-list-body').append(tableBody);
                }
            });
        }

        // Calculate state name box position
        var boxPos = { x: -1, y: -1 };
        $(this).on('mousemove', classNames, function(event){
            var xOffset = 11 + ($('#state-name-box').width() / 2);
            var yOffset = 185;
            boxPos.x = event.pageX - xOffset;
            boxPos.y = event.pageY - yOffset;
            $('.state-box').css({'left': boxPos.x + 'px', 'top': boxPos.y + 'px'});
        });

        // Display jobs available in that state
        $(this).on('click', classNames, function(){
            $('body').lockScrollBar();
            $('.state-job-list .'+$(this).attr('id')).addClass('state-job-list-active');
            
            // Hide current job list if needed
            if($(this).hasClass('current-client')){
                $('.current-job-list').show();
            }
            else{
                $('.current-job-list').hide();
            }
            // Hide pending job list if needed
            if($(this).hasClass('pending-client')){
                $('.pending-job-list').show();
            }
            else{
                $('.pending-job-list').hide();
            }
            
            // Create clone element to get correct box animation sizes
            var maxHeight = 250;
            var elClone = $('.state-job-list').clone().css({'width':'auto', 'height':'auto'}).appendTo('.state-box');
            var autoHeight = elClone.outerHeight();
            var autoWidth = elClone.outerWidth();

            // Remove cloned element
            elClone.remove();

            // Set animation size
            $('.state-job-list').width(autoWidth);
            (autoHeight < maxHeight) ? $('.state-job-list').height(autoHeight) : $('.state-job-list').height(maxHeight);
            if(boxPos.x + autoWidth > $('#page').width()){
                boxPos.x -= (boxPos.x + autoWidth) - $('#page').width();
                $('.state-box').css({'left': boxPos.x + 'px'});
            }
            
            // Sync col header width with table cell widths
            setTimeout(function(){
                sync_col_width('current-state-job-list-body', 'current-state-job-list-header');
                sync_col_width('pending-state-job-list-body', 'pending-state-job-list-header');
            }, 200);

            // Close box when mouse leaves container
            $('.state-box').on('mouseleave', function(){
                $('body').unlockScrollBar();
                $('.state-job-list').width(0);
                $('.state-job-list').height(0);
                $('.state-job-list').scrollTop(0);
                $('.state-job-list tbody').removeClass('state-job-list-active');
                $('.state-box').removeClass('state-box-active');
                $('.current-job-list #state-job-list-header').css({bottom: ''});
                $('.pending-job-list #state-job-list-header').css({top: ''});
                currentListContainer.removeClass('not-currently-scrolling-list');
                pendingListContainer.addClass('not-currently-scrolling-list');
            });
        });
        
        // Controls header postitons
        $('.state-job-list').on('scroll', function(){
            var stateNameBoxHeight = $('#state-name-box').prop("scrollHeight");
            var currentListHeader = $('.current-job-list #current-state-job-list-header');
            var currentListContainer = $('.current-job-list');
            var currentListHeight = currentListContainer.prop("scrollHeight") - currentListHeader.height();
            var pendingListHeader = $('.pending-job-list #pending-state-job-list-header');
            var pendingListContainer = $('.pending-job-list');
            var pendingListStart = $('.current-job-list').prop("scrollHeight");

            if($(this).scrollTop() > currentListHeight && $(this).scrollTop() < pendingListStart){
                currentListHeader.css({bottom: 0});
                pendingListHeader.css({top: 0});
                currentListContainer.addClass('not-currently-scrolling-list');
                pendingListContainer.addClass('not-currently-scrolling-list');
            }
            else if($(this).scrollTop() > currentListHeight){
                currentListHeader.css({bottom: 0});
                pendingListHeader.css({top: stateNameBoxHeight});
                currentListContainer.addClass('not-currently-scrolling-list');
                pendingListContainer.removeClass('not-currently-scrolling-list');
            }
            else{
                currentListHeader.css({bottom: ''});
                pendingListHeader.css({top: 0});
                currentListContainer.removeClass('not-currently-scrolling-list');
                pendingListContainer.addClass('not-currently-scrolling-list');
            }
        });
        
        // Display the state name box
        $(this).on('mouseenter', classNames, function(){
            $('#state-name-box').html($(this).html());
            $('.state-box').addClass('state-box-active');
        });
        
        // Hide state name box
        $(this).on('mouseleave', classNames, function(){
            if(!$('.state-job-list .'+$(this).attr('id')).is(':visible')){
                $('.state-box').removeClass('state-box-active');
            }
        });


        // Controls info box height for vertical alignment
        setTimeout(function(){
            if(!isMobile){
                $('.job-map-side-info').children('div').removeClass('vertically-center');
                $('.job-map-side-info').css({ height: '' });
                var mapHeight = $('.job-map-container').outerHeight();
                var containerHeight = $('.job-map-region-container').outerHeight();
                var infoBoxImgHeight = $('.job-map-side-img').outerHeight();
                var infoBoxTextHeight = containerHeight - infoBoxImgHeight;
                if(containerHeight <= mapHeight){
                    $('.job-map-side-info').children('div').addClass('vertically-center');
                    $('.job-map-side-info').css({ height: infoBoxTextHeight+'px' });
                }
            }
            else{
                $('.job-map-side-info').children('div').removeClass('vertically-center');
                $('.job-map-side-info').css({ height: '' });
            }
        }, 250);
        $(window).resize(function(){
            if(!isMobile){
                $('.job-map-side-info').children('div').removeClass('vertically-center');
                $('.job-map-side-info').css({ height: '' });
                var mapHeight = $('.job-map-container').outerHeight();
                var containerHeight = $('.job-map-region-container').outerHeight();
                var infoBoxImgHeight = $('.job-map-side-img').outerHeight();
                var infoBoxTextHeight = containerHeight - infoBoxImgHeight;
                if(containerHeight <= mapHeight){
                    $('.job-map-side-info').children('div').addClass('vertically-center');
                    $('.job-map-side-info').css({ height: infoBoxTextHeight+'px' });
                }
            }
            else{
                $('.job-map-side-info').children('div').removeClass('vertically-center');
                $('.job-map-side-info').css({ height: '' });
            }
        });
    };

    // Populates in the news list on library page
    $.fn.libNewsHandler = function(){
        $.ajax({
            type: "GET",
            url: "/Documents/Library/NSI_In_The_News.csv",
            dataType: "text",
            success: function(data){
                // Get data from csv file and put it in the table
                var csv_data = $.csv.toObjects(data);
                var tableBody = '';
                var tableListBody = 'table-list';
                var tableListHeader = 'table-list-header';
                for(var row = csv_data.length - 1; row > -1; row--){
                    var tableRow = '<tr>';
                    var cellData = csv_data[row];

                    if(row == 0){
                        tableRow += '<th class="title" data-col-num="0">Title</th>';
                        tableRow += '<th class="date" data-col-num="1">Date Published</th>';
                    }
                    else{
                        tableRow += '<td><a target="_blank" href="'+cellData.URL+'">'+cellData.Title+'</a></td>';
                        tableRow += '<td>'+cellData.Date+'</td>';
                    }

                    tableRow += '</tr>';
                    
                    if(row == 0){
                        $('#'+tableListBody+' thead').append(tableRow);
                        $('#'+tableListHeader+' thead').append(tableRow);
                    }
                    else{
                        tableBody += tableRow;
                    }

                    // Sync col header width with table cell widths
                    sync_col_width(tableListBody, tableListHeader);
                }
                $('#'+tableListBody+' tbody').append(tableBody);
            }
        });

        // Sync header and cell widths on window resize
        $(window).resize(function(){
            sync_col_width('table-list', 'table-list-header');
        });
    }

    // Randomly selects testimonials and places them on application page
    $.fn.quoteHandler = function(){
        // Reads data in from csv file and into a table
        $.ajax({
            type: "GET",
            url: "/Documents/Testimonials_RN.csv",
            dataType: "text",
            success: function(data){
                // Get data from csv file and put it in the table
                var csv_data = $.csv.toObjects(data);
                var height = $('#region-two #content-body').height();
                var numQuotes = 12;
                var quoteSectionHeight = $('.app-content-box').outerHeight() / (numQuotes / 2);
                for(var i = 0; i < numQuotes; i++){
                    var side = '';
                    var upperHeightBound = quoteSectionHeight * Math.floor(i / 2);
                    if(i % 2){
                        side = '.bkgrd-quotes-right';
                    }
                    else{
                        side = '.bkgrd-quotes-left';
                    }

                    var width = $(side).width();
                    var widthOffset = 320;
                    var randOffset = 50;
                    var tailDir = (Math.floor(Math.random() * 2)) ? 'right' : 'left';
                    var quoteIndex = Math.floor(Math.random() * csv_data.length);
                    var locX = Math.floor(Math.random() * width);
                    var locY = Math.floor((Math.random() * quoteSectionHeight) + upperHeightBound);
                    var quote = '<div class="quote-container" data-quote-num="'+i+'">';
                    quote += '<div class="quote-box">';
                    quote += '<p class="quote">'+csv_data[quoteIndex].Quote+'</p>';
                    quote += '<p class="quotee">- '+csv_data[quoteIndex].Name+', '+csv_data[quoteIndex].State+'</p>';
                    quote += '</div><div class="quote-tail-'+tailDir+'"></div></div>';
                    $(side).append(quote);

                    // Positions quote within specifed bounds
                    var el = $('#content-bkgrd-quotes [data-quote-num='+i+']');

                    if(side == '.bkgrd-quotes-right'){
                        if(locX < widthOffset){
                            locX = widthOffset + (randOffset * Math.random());
                        }
                        else if(width < locX + el.width()){
                            locX = width - el.width() - (randOffset * Math.random());
                        }
                    }
                    else if(locX + el.width() > width - widthOffset){
                        locX = width - widthOffset - el.width() - (randOffset * Math.random());
                    }

                    // Check if quote is within height bounds
                    if(height < locY + el.height()){
                        locY = height - el.height() - (randOffset * Math.random());
                    }
                    
                    el.css({ "left": locX, "top": locY });
                    csv_data.splice(quoteIndex, 1);
                }
            }
        });
    }

    // Creates Custom embeded PDF viewer
    $.fn.loadPresentation = function(){
        // If absolute URL from the remote server is provided, configure the CORS
        // header on that server.
        var url = '/Documents/SalesPresentation.pdf';

        // Loaded via <script> tag, create shortcut to access PDF.js exports.
        var pdfjsLib = window['pdfjs-dist/build/pdf'];

        // The workerSrc property shall be specified.
        pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://mozilla.github.io/pdf.js/build/pdf.worker.js';

        var defaultContainerWidth = 935;
        var defaultContainerHeight = 725;
        var pdfDoc = null;
        var pageNum = 1;
        var pageRendering = false;
        var pageNumPending = null;
        var scale = 2;
        var canvas = document.getElementById('pwr-pt-pres');
        var ctx = canvas.getContext('2d');
        canvas.style.width = "100%";
        canvas.style.height = "100%";

        /**
         * @param num Page number.
         */
        // Get page info from document, resize canvas accordingly, and render page.
        function renderPage(num) {
            pageRendering = true;
            // Using promise to fetch the page
            pdfDoc.getPage(num).then(function(page) {
                var viewport = page.getViewport({scale: scale});
                canvas.height = viewport.height;
                canvas.width = viewport.width;

                // Render PDF page into canvas context
                var renderContext = {
                    canvasContext: ctx,
                    viewport: viewport
                };
                var renderTask = page.render(renderContext);

                // Wait for rendering to finish
                renderTask.promise.then(function() {
                    pageRendering = false;
                    if (pageNumPending !== null) {
                        // New page rendering is pending
                        renderPage(pageNumPending);
                        pageNumPending = null;
                    }
                });
            });

            // Update page counters
            document.getElementById('page_num').textContent = num;
        }

        // If another page rendering in progress, waits until the rendering is
        // finised. Otherwise, executes rendering immediately.
        function queueRenderPage(num) {
            if (pageRendering) {
                pageNumPending = num;
            } else {
                renderPage(num);
            }
        }

        // Displays previous page.
        $('.prev-slide').click(function() {
            if (pageNum <= 1) {
                return;
            }
            pageNum--;
            queueRenderPage(pageNum);
        });

        // Displays next page.
        $('.next-slide').click(function() {
            if (pageNum >= pdfDoc.numPages) {
                return;
            }
            pageNum++;
            queueRenderPage(pageNum);
        });

        heightScaler = $('.pwr-pt-container').outerWidth() / defaultContainerWidth;
        $('.pwr-pt-container').css({ height: heightScaler*defaultContainerHeight });
        $(window).resize(function(){
            heightScaler = $('.pwr-pt-container').outerWidth() / defaultContainerWidth;
            $('.pwr-pt-container').css({ height: heightScaler*defaultContainerHeight });
        });

        // Asynchronously downloads PDF.
        pdfjsLib.getDocument(url).promise.then(function(pdfDoc_) {
            pdfDoc = pdfDoc_;
            document.getElementById('page_count').textContent = pdfDoc.numPages;

            // Initial/first page rendering
            renderPage(pageNum);
        });
    }

    // Calculates savings
    // Clears inputs when button is clicked
    // Controls info pop-ups
    $.fn.savingsCalculator = function(){
        // Clear inputs on button click
        $('#reset-btn').on('click', function(){
            $('.form-input').val('');
            $('input[name = "COB"]').val('28');
        });

        // Check to make sure only numbers are being entered
        $('.form-input').on('change, keyup', function() {
            var fixedInput = $(this).val().replace(/[A-Za-z -,/:-~]/g, '');
            $(this).val(fixedInput);
            
            var fullTimeHours = 2080;
            var tmp = numberWithCommas($(this).val().replace(',', ''));
            var contractLabor = $('input[name = "ContractLaborRate"]').val().replace(',', '');
            var staffNurseRate = $('input[name = "StaffNurseRate"]').val().replace(',', '');
            var cob = $('input[name = "COB"]').val().replace(',', '') / 100 + 1;
            var numNurses = $('input[name = "NumberNursesNeeded"]').val().replace(',', '');
            var AdjustedRate = staffNurseRate * cob;
            var firstYrSavings = Math.floor((contractLabor*numNurses*fullTimeHours) - (staffNurseRate*cob*numNurses*fullTimeHours));
            
            $('input[name="AdjustedRate"').val(numberWithCommas(AdjustedRate.toFixed(2)));
            $('input[name="FirstSavings"]').val(numberWithCommas(firstYrSavings)+'.00');
            $(this).val(tmp);
        });

        // Add Form info to email body
        $('#contact-us-btn').on('click', function(){
            var emailBody = "";
            var numNursesNeeded = $('input[name = "NumberNursesNeeded"]').val();
            var contractRate = $('input[name = "ContractLaborRate"]').val();
            var staffRate = $('input[name = "StaffNurseRate"]').val();
            var cobVal = $('input[name = "COB"]').val();
            var adjustedRate = $('input[name = "AdjustedRate"]').val();
            var totalSavings = $('input[name = "FirstSavings"]').val();

            if(totalSavings != "" && totalSavings != "0.00"){
                emailBody = "Hi Michael,\n\n";
                emailBody += "I have entered the information below into the NSI Savings Calculator.  I am interested in learning more about NSI Nursing Solutions and look forward to hearing from you soon.\n\n";
                emailBody += "Number of RNs Needed:\t"+ numNursesNeeded +"\n";
                emailBody += "RN Contract Labor Rate:\t\t$"+ contractRate +"\n";
                emailBody += "Average Staff RN Rate:\t\t$"+ staffRate +"\n";
                emailBody += "Cost of Benefits:\t\t"+ cobVal +"%" +"\n";
                emailBody += "Adjusted Staff RN Rate:\t\t$"+ adjustedRate +"\n";
                emailBody += "Projected Total Savings:\t\t$"+ totalSavings +"\n";
                emailBody += "\n";
            }
            
            var mailToLink = "mailto:macolosi@nsinursingsolutions.com?subject=NSI%20Savings%20Calculator&body="+ encodeURIComponent(emailBody);
            window.location.href = mailToLink
        });
        
        // Displays tooltip pop-up
        $('.field-info-container').on('mouseenter', function(){
            $(this).children('.field-info').addClass('field-info-active');
        });

        // Hides tooltip pop-up
        $('.field-info-container').on('mouseleave', function(){
            $(this).children('.field-info').removeClass('field-info-active');
        });
    }
})($);

