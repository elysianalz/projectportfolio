<script>
	import Nav from './components/Nav.svelte';
	import Projects from "./components/Projects.svelte";
	import About from "./components/About.svelte";
	import Contact from "./components/Contact.svelte";
	import Footer from "./components/Footer.svelte";
</script>

<Nav/>
<About/>
<Projects/>
<!-- <Contact/> -->
<Footer/>

<style>
	@media (width: 640px) {
		main {
			width: 100%;
		}
	}
</style>
