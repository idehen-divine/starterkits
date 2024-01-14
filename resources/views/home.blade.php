<x-guest-layouts :title="'Starter Kits'">
    <div class="px-4 py-5 my-5 text-center">
        <h1 class="">Starter Kits</h1>
        <div class="col-lg-6 mx-auto">
            <p class="mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s
                most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system,
                extensive prebuilt components, and powerful JavaScript plugins.</p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
				<x-button :type="'primary'" :href="route('login')">Login</x-button>
            </div>
        </div>
    </div>
</x-guest-layouts>
