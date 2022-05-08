//close and open navigation
document.getElementById('open-btn').onclick = function() {
    document.getElementById('nav').classList.add('disable');
    document.getElementById('open-nav').classList.add('active');
}
document.getElementById('close-btn').onclick = function() {
    document.getElementById('nav').classList.remove('disable');
    document.getElementById('open-nav').classList.remove('active');
    content.innerHTML = '';
}

//change content  on navigation
let content = document.getElementById('content');

//content section 
document.getElementById('item-1').onclick = function() {
    content.innerHTML =
        `<p class="aside-content__header">Board games</p>
        <div class="aside-content__list">
            <ul>
                <li>
                    <a href="#">battle cry (49)</a>
                </li>
                <li>
                    <a href="#">Warhammer 40k (400)</a>
                </li>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="#">Lord of the Rings(16)</a>
                </li>
                <li>
                    <a href="#">Warhammer: Underworlds (22)</a>
                </li>
                <li>
                    <a href="#">Blood Bowl (28)</a>
                </li>
                <li>
                    <a href="#">Nercomunda (21)</a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="#">Warhammer: Underworlds (22)</a>
                </li>
                <li>
                    <a href="#">Killtem (4)</a>
                </li>
            </ul>
        </div>`;
}
document.getElementById('item-2').onclick = function() {
    let content = document.getElementById('content');
    content.innerHTML =
        `<p class="aside-content__header">Warhammer 40000</p>
        <div class="aside-content__list">
            <ul>
                <li>
                    <a href="#">Lord of the Rings(16)</a>
                </li>
                <li>
                    <a href="#">Warhammer: Underworlds (22)</a>
                </li>
                <li>
                    <a href="#">Blood Bowl (28)</a>
                </li>
                <li>
                    <a href="#">Nercomunda (21)</a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="#">battle cry (49)</a>
                </li>
                <li>
                    <a href="#">Warhammer 40k (400)</a>
                </li>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="#">Warhammer: Underworlds (22)</a>
                </li>
                <li>
                    <a href="#">Killtem (4)</a>
                </li>
            </ul>
        </div>`;
}
document.getElementById('item-3').onclick = function() {
    let content = document.getElementById('content');
    content.innerHTML =
        `<p class="aside-content__header">Magic: the Gathering</p>
        <div class="aside-content__list">
            <ul>
                <li>
                    <a href="#">Warhammer 40k (400)</a>
                </li>
                <li>
                    <a href="#">Lord of the Rings(16)</a>
                </li>
                <li>
                    <a href="#">battle cry (49)</a>
                </li>
                <li>
                    <a href="#">Warhammer 40k (400)</a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="#">Lord of the Rings(16)</a>
                </li>
                <li>
                    <a href="#">Killtem (4)</a>
                </li>
                <li>
                    <a href="#">Nercomunda (21)</a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="#">Warhammer 40k (400)</a>
                </li>
                <li>
                    <a href="#">Nercomunda (21)</a>
                </li>
            </ul>
        </div>`;
}
document.getElementById('item-4').onclick = function() {
    let content = document.getElementById('content');
    content.innerHTML =
        `<p class="aside-content__header">Game accessories</p>
        <div class="aside-content__list">
            <ul>
                <li>
                    <a href="#">Lord of the Rings(16)</a>
                </li>
                <li>
                    <a href="#">Killtem (4)</a>
                </li>
                <li>
                    <a href="#">Nercomunda (21)</a>
                </li>
            </ul><ul>
                <li>
                    <a href="#">Lord of the Rings(16)</a>
                </li>
                <li>
                    <a href="#">Killtem (4)</a>
                </li>
                <li>
                    <a href="#">Nercomunda (21)</a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="#">Warhammer: Underworlds (22)</a>
                </li>
                <li>
                    <a href="#">Killtem (4)</a>
                </li>
                <li>
                <a href="#">Lord of the Rings(16)</a>
                </li>
                <li>
                    <a href="#">Lord of the Rings(16)</a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="#">Blood Bowl (28)</a>
                </li>
                <li>
                    <a href="#">Nercomunda (21)</a>
                </li>
            </ul>
        </div>`;
}
document.getElementById('item-5').onclick = function() {
    content.innerHTML =
        `<p class="aside-content__header">Paints</p>
        <div class="aside-content__list">
        <ul>
            <li>
                <a href="#">battle cry (49)</a>
            </li>
            <li>
                <a href="#">Warhammer 40k (400)</a>
            </li>
        </ul>
        <ul>
            <li>
                <a href="#">Warhammer: Underworlds (22)</a>
            </li>
            <li>
                <a href="#">Killtem (4)</a>
            </li>
        </ul>
        <ul>
            <li>
                <a href="#">Lord of the Rings(16)</a>
            </li>
            <li>
                <a href="#">Warhammer: Underworlds (22)</a>
            </li>
            <li>
                <a href="#">Blood Bowl (28)</a>
            </li>
            <li>
                <a href="#">Nercomunda (21)</a>
            </li>
        </ul>
    </div>`;
}
document.getElementById('item-6').onclick = function() {
    content.innerHTML =
        `<p class="aside-content__header">Goods for children</p>
        <div class="aside-content__list">
        <ul>
            <li>
                <a href="#">battle cry (49)</a>
            </li>
            <li>
                <a href="#">Warhammer 40k (400)</a>
            </li>
        </ul>
        <ul>
            <li>
                <a href="#">Warhammer: Underworlds (22)</a>
            </li>
            <li>
                <a href="#">Killtem (4)</a>
            </li>
        </ul>
        <ul>
        <li>
        <a href="#">Warhammer 40k (400)</a>
        </li>
            <li>
                <a href="#">Warhammer: Underworlds (22)</a>
            </li>
            <li>
                <a href="#">Blood Bowl (28)</a>
            </li>
            <li>
                <a href="#">Nercomunda (21)</a>
            </li>
        </ul>
    </div>`;
}
document.getElementById('item-7').onclick = function() {
    let content = document.getElementById('content');
    content.innerHTML =
        `<p class="aside-content__header">Accessories for modeling</p>
        <div class="aside-content__list">
            <ul>
                <li>
                    <a href="#">Lord of the Rings(16)</a>
                </li>
                <li>
                    <a href="#">Killtem (4)</a>
                </li>
                <li>
                    <a href="#">Nercomunda (21)</a>
                </li>
            </ul><ul>
                <li>
                    <a href="#">Lord of the Rings(16)</a>
                </li>
                <li>
                    <a href="#">Killtem (4)</a>
                </li>
                <li>
                    <a href="#">Nercomunda (21)</a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="#">Warhammer: Underworlds (22)</a>
                </li>
                <li>
                    <a href="#">Killtem (4)</a>
                </li>
                <li>
                <a href="#">Lord of the Rings(16)</a>
                </li>
                <li>
                    <a href="#">Lord of the Rings(16)</a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="#">Blood Bowl (28)</a>
                </li>
                <li>
                    <a href="#">Nercomunda (21)</a>
                </li>
            </ul>
        </div>`;
}