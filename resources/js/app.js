require("./bootstrap");
import Vue from "vue";

import Agenda from "./components/Agenda"
import StoreSon from './components/StoreSon'

new Vue({
    el: "#app",
    components: {
		Agenda,
		StoreSon
    }
});
