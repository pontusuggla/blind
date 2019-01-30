<template>
    <v-layout row>
        <v-flex xs3 ml-4>
            <div v-for="letter in letters" :key="letter">
                <v-btn small :color="selectedLetter == letter ? 'selected' : 'primary'" :id="'letter-' + letter" @click="loadLetter(letter)">
                    {{ letter }}
                </v-btn>
            </div>
        </v-flex>
        <v-flex xs11>
            <div v-for="letterpair in letterpairs" :key="letterpair.id">
                {{ letterpair.letterpair }}
                {{ letterpair.answer }}
            </div>
        </v-flex>
    </v-layout>
</template>

<script>
    export default {
        data() {
            return {
                letters: [],
                letterpairs: [],
                selectedLetter: null
            };
        },
        created() {
            this.loadLetters();
        },
        methods: {
            loadLetters() {
                fetch('/api/letters')
                    .then(res => res.json())
                    .then(res => {
                        this.letters = res;
                        this.loadLetter('A');
                    })
                    .catch(err => console.log(err));
            },
            loadLetter(letter) {
                this.selectedLetter = letter;

                fetch('/api/letterpair?letter=' + letter)
                    .then(res => res.json())
                    .then(res => {
                        this.letterpairs = res.data;
                    })
                    .catch(err => console.log(err));

            }
        }
    };
</script>