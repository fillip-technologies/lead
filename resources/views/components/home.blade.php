{{-- @props(['leads' => [$leads]]) --}}

<section x-data="{ activeTab: '{{ session('activeTab', 'dashboard') }}', sidebarOpen: false, leadFormOpen: {{ session('leadFormOpen', false) ? 'true' : 'false' }} }" class="bg-white min-h-screen flex">

    <x-sidebar />

    <main class="flex-1 p-6 lg:ml-0 h-screen overflow-y-auto">
        <button @click="sidebarOpen = true" class="mb-4 lg:hidden bg-[#0E2245] text-white px-4 py-2 rounded">
            ☰ Menu
        </button>

        <div x-show="activeTab === 'dashboard'" x-cloak><x-dashboard :totalLeads="$totalLeads" :activeLeads="$activeLeads"
                :completedLeads="$completedLeads" :servicesStats="$servicesStats" :totalwebsite="$totalwebsite" :totaldigitalmarketing="$totaldigitalmarketing" :totalsocialmedia="$totalsocialmedia"
                :totalgmb="$totalgmb" /></div>
        <div x-show="activeTab === 'clients'" x-cloak><x-leads.all-clients :leads="$leads" /></div>
        <div x-show="activeTab === 'addclient'" x-cloak><x-leads.add-clients :industries="$leadIndustries" :ratings="$leadRatings" :sources="$leadSources" /></div>
        <div x-show="activeTab === 'assignedleads'" x-cloak><x-leads.AssignedLeads /></div>
        <div x-show="activeTab === 'allusers'" x-cloak><x-leads.AllUsers /></div>

        <!-- Now this will open -->
        <div x-show="activeTab === 'leadindustry'" x-cloak><x-leads.LeadIndustry :industries="$leadIndustries" /></div>
        <div x-show="activeTab === 'leadrating'" x-cloak><x-leads.LeadRating :ratings="$leadRatings" /></div>
        <div x-show="activeTab === 'leadsource'" x-cloak><x-leads.LeadSource :sources="$leadSources" /></div>
        <div x-show="activeTab === 'leadaddress'" x-cloak><x-leads.LeadAddress :addresses="$leadAddresses" /></div>


        <div x-show="activeTab === 'website'" x-cloak><x-campaigns.website :website="$website" /></div>
        <div x-show="activeTab === 'digitalmarketing'" x-cloak><x-campaigns.digitalmarketing :digitalmarketing="$digitalmarketing" /></div>
        <div x-show="activeTab === 'socialmedia'" x-cloak><x-campaigns.socialmedia :socialmedia="$socialmedia" /></div>
        <div x-show="activeTab === 'gmb'" x-cloak><x-campaigns.gmb :gmb="$gmb" /></div>



        <div x-show="activeTab === 'logout'" x-cloak>
            <h2 class="text-2xl font-semibold mb-4 text-red-500">You have logged out!</h2>
        </div>
    </main>
</section>
