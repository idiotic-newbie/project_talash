<?php
$platform_name = "Justice Connect";
$current_year = date('Y');

$stats = [
    ['value' => 174000, 'label' => 'Children go missing every year in India'],
    ['value' => 365, 'label' => 'Days families wait without answers'],
    ['value' => 500, 'label' => 'Average cases handled by one officer'],
    ['value' => null, 'label' => 'Scattered data points that could help']
];

$stories = [
    [
        'icon' => '💔',
        'title' => 'The Waiting Parent',
        'desc' => 'Every morning begins with hope. Every night ends with fear. Somewhere, a small piece of information exists — but it is buried, disconnected, and unreachable.'
    ],
    [
        'icon' => '👮',
        'title' => 'The Overloaded Officer',
        'desc' => 'Hundreds of cases. Limited time. No unified digital support. The answers may exist — but finding them manually costs days that victims don’t have.'
    ]
];

$solutions = [
    ['n'=>'01','t'=>'Bring Order','d'=>'We organize already publicly circulating breach intelligence into a form investigators can actually use.'],
    ['n'=>'02','t'=>'Reveal Links','d'=>'Phone numbers, addresses, vehicles — when viewed together, patterns emerge.'],
    ['n'=>'03','t'=>'Support Action','d'=>'We provide intelligence support. Officers investigate. Human judgment remains central.']
];

$benefits = [
    ['i'=>'⏱️','t'=>'Faster Leads','d'=>'Hours instead of days'],
    ['i'=>'🎯','t'=>'Focused Effort','d'=>'Less noise, better direction'],
    ['i'=>'👥','t'=>'Same Manpower','d'=>'Stronger outcomes'],
    ['i'=>'🛡️','t'=>'Ethical Use','d'=>'Only for law enforcement']
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= $platform_name ?> — Every Second Counts</title>

<style>
body{margin:0;font-family:system-ui,-apple-system,Segoe UI,Roboto;color:#111827}
section{padding:100px 20px}
.container{max-width:1100px;margin:auto}
.hero{
min-height:100vh;
background:linear-gradient(135deg,#0f172a,#1e293b);
color:white;
display:flex;
align-items:center;
text-align:center
}
.timer{font-size:4rem;color:#ef4444;font-weight:800;margin-bottom:20px}
h1{font-size:3rem;margin-bottom:20px}
.subtitle{font-size:1.4rem;opacity:.9}
.stats{display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:30px;margin-top:60px}
.card{
background:white;border-radius:18px;padding:35px;
box-shadow:0 20px 50px rgba(0,0,0,.1);
transition:.3s
}
.card:hover{transform:translateY(-8px)}
.num{font-size:3rem;font-weight:800;color:#2563eb}
.center{text-align:center}
.gray{color:#6b7280}
.story{display:grid;grid-template-columns:1fr 1fr;gap:40px;margin-top:60px}
.story-box{background:#f8fafc;padding:40px;border-radius:20px}
.steps{max-width:900px;margin:60px auto}
.step{display:flex;gap:30px;margin-bottom:50px}
.circle{
width:90px;height:90px;border-radius:50%;
background:#2563eb;color:white;
display:flex;align-items:center;justify-content:center;
font-size:2rem;font-weight:700
}
.benefits{display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:30px;margin-top:60px}
.benefit{background:rgba(255,255,255,.08);padding:35px;border-radius:18px}
.cta{
background:#020617;color:white;text-align:center
}
.btn{
display:inline-block;margin-top:40px;
background:#2563eb;color:white;
padding:20px 50px;border-radius:50px;
font-size:1.3rem;text-decoration:none
}
footer{background:#020617;color:#9ca3af;text-align:center;padding:50px 20px}
@media(max-width:768px){
.story{grid-template-columns:1fr}
h1{font-size:2.2rem}
}
</style>
</head>

<body>

<section class="hero">
<div class="container">
<div class="timer" id="timer">00:00:00</div>
<h1>Every Second a Child Waits</h1>
<p class="subtitle">
Somewhere, the information to help already exists.<br>
It is just not connected.
</p>
</div>
</section>

<section>
<div class="container center">
<h2>The Reality</h2>
<p class="gray">These are not statistics. They are lives.</p>
<div class="stats">
<?php foreach($stats as $s): ?>
<div class="card">
<div class="num" data-target="<?= is_numeric($s['value'])?$s['value']:'' ?>">
<?= $s['value']===null?'∞':'0' ?>
</div>
<p><?= $s['label'] ?></p>
</div>
<?php endforeach ?>
</div>
</div>
</section>

<section>
<div class="container">
<h2 class="center">Behind Every Case</h2>
<div class="story">
<?php foreach($stories as $st): ?>
<div class="story-box">
<h3><?= $st['icon'].' '.$st['title'] ?></h3>
<p><?= $st['desc'] ?></p>
</div>
<?php endforeach ?>
</div>
</div>
</section>

<section>
<div class="container">
<h2 class="center">How We Help</h2>
<div class="steps">
<?php foreach($solutions as $sol): ?>
<div class="step">
<div class="circle"><?= $sol['n'] ?></div>
<div>
<h3><?= $sol['t'] ?></h3>
<p><?= $sol['d'] ?></p>
</div>
</div>
<?php endforeach ?>
</div>
</div>
</section>

<section style="background:#1e293b;color:white">
<div class="container">
<h2 class="center">What This Means for Police</h2>
<div class="benefits">
<?php foreach($benefits as $b): ?>
<div class="benefit center">
<div style="font-size:3rem"><?= $b['i'] ?></div>
<h3><?= $b['t'] ?></h3>
<p><?= $b['d'] ?></p>
</div>
<?php endforeach ?>
</div>
<p class="center" style="margin-top:60px;font-size:1.5rem">
If this helps solve even one case — it is worth it.
</p>
</div>
</section>

<section class="cta">
<div class="container">
<h2>Technology Should Protect the Vulnerable</h2>
<p>
No parent should wait for years.<br>
No officer should work without digital support.
</p>
<a class="btn" href="#">Let’s Connect the Dots</a>
</div>
</section>

<footer>
<p><?= $platform_name ?></p>
<p>Independent • Non-profit • Law-Enforcement Focused</p>
<p>© <?= $current_year ?></p>
</footer>

<script>
let s=0;
setInterval(()=>{
s++;
let h=String(Math.floor(s/3600)).padStart(2,'0');
let m=String(Math.floor(s%3600/60)).padStart(2,'0');
let se=String(s%60).padStart(2,'0');
timer.textContent=`${h}:${m}:${se}`;
},1000);

document.querySelectorAll('[data-target]').forEach(el=>{
let t=+el.dataset.target,c=0;
if(!t)return;
let i=setInterval(()=>{
c+=Math.ceil(t/60);
if(c>=t){el.textContent=t.toLocaleString('en-IN');clearInterval(i)}
else el.textContent=c.toLocaleString('en-IN')
},30);
});
</script>

</body>
</html>
