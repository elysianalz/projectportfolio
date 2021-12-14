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
	@media (min-width: 640px) {
		main {
			max-width: none;
		}
	}
</style>
