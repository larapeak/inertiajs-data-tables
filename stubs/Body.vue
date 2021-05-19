<template>
    <tr v-for="entry in tabledata" :key="entry.id" class="hover:bg-gray-100 focus-within:bg-gray-100">
        <td v-for="field in tableFields" :key="field.id" class="border-t">
            <div v-if="field.type == 'text'">
                <inertia-link class="flex items-center px-6 py-4" :href="route(model + '.edit', (slug == 'id') ? entry.id : entry.slug)">
                    {{ entry[field.id] }}
                </inertia-link>
            </div>

            <div v-if="field.type == 'date'">
                <inertia-link class="flex items-center px-6 py-4" :href="route(model + '.edit', (slug == 'id') ? entry.id : entry.slug)">
                    {{ formatDate(entry[field.id]) }}
                </inertia-link>
            </div>

            <div v-if="field.type == 'status'">
                <inertia-link class="flex items-center px-6 py-4" :href="route(model + '.edit', (slug == 'id') ? entry.id : entry.slug)">
                    <div v-if="entry[field.id] == 1" class="flex items-center px-2 py-1 text-xs text-green-900 bg-green-200 rounded-full w-min">
                        <div class="w-2 h-2 mr-1 bg-green-500 rounded-full"></div>
                        Online
                    </div>
                    <div v-if="entry[field.id] == 0" class="flex items-center px-2 py-1 text-xs text-yellow-900 bg-yellow-200 rounded-full w-min">
                        <div class="w-2 h-2 mr-1 bg-yellow-500 rounded-full"></div>
                        Draft
                    </div>
                </inertia-link>
            </div>
        </td>
    </tr>
</template>

<script>
    import moment from 'moment'

    export default {
        props: {
            tabledata: Array,
            tableFields: Array,
            model: String,
            slug: {
                default: 'id',
                type: String,
            },
        },

        methods: {
            formatDate(date) {
                if(date != null){
                    return moment(date).format('MM-DD-YYYY');
                }

                return '-';
            }
        },
    }
</script>