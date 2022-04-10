<div>
    <div class="sm:hidden">
        <label for="tabs" class="sr-only">Select a language</label>
        <!-- Use an "onChange" listener to redirect the user to the selected tab URL. -->
        <select id="tabs" name="tabs" class="block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
            <option selected>EN</option>
            <option>RU</option>
            <option>KK</option>
        </select>
    </div>
    <div class="hidden sm:block">
        <div class="border-b border-gray-200">
            <nav class="-mb-px flex space-x-8" aria-label="Tabs">
                <!-- Current: "border-indigo-500 text-indigo-600", Default: "border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300" -->
                <a href="#"
                   @click="selectedLang = 'en'"
                   :class="selectedLang === 'en' ? 'text-indigo-600 border-indigo-500 hover:text-indigo-700 hover:border-indigo-700' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300'"
                   class="whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm"> EN </a>
                <a href="#"
                   @click="selectedLang = 'ru'"
                   :class="selectedLang === 'ru' ? 'text-indigo-600 border-indigo-500 hover:text-indigo-700 hover:border-indigo-700' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300'"
                   class="whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm"> RU </a>
                <a href="#"
                   @click="selectedLang = 'kk'"
                   :class="selectedLang === 'kk' ? 'text-indigo-600 border-indigo-500 hover:text-indigo-700 hover:border-indigo-700' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300'"
                   class="whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm"> KK </a>
            </nav>
        </div>
    </div>
</div>
