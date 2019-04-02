const FLOW_SIDEBAR = '#flow-sidebar';
const $flowSidebar = $(FLOW_SIDEBAR);
function changeFlowSidebarPosition(isCollapsed) {
    const navbarHeight = isCollapsed ? 65 : 80;
    $flowSidebar.css('top', navbarHeight + 'px');
}

$(window).on('scroll', (e) => {
    const isCollapsed = isNavbarCollapsed();
    changeFlowSidebarPosition(isCollapsed);
});
// ----------------------------------------------
