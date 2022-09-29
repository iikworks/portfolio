let mobileTopNav = false

function toggleMobileTopNav(){
    if(mobileTopNav) {
        document.getElementById('mobile_nav').classList.add('hidden');
        document.getElementById('mobile_nav_open_button').classList.remove('hidden');
        document.getElementById('mobile_nav_close_button').classList.add('hidden');
        mobileTopNav = false
    } else {
        document.getElementById('mobile_nav').classList.remove('hidden');
        document.getElementById('mobile_nav_open_button').classList.add('hidden');
        document.getElementById('mobile_nav_close_button').classList.remove('hidden');
        mobileTopNav = true
    }
}