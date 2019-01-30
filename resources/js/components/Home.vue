<template>
    <v-layout justify-center>
        <v-flex :class="{'xs10': $vuetify.breakpoint.smAndDown, 'xs8': $vuetify.breakpoint.mdAndUp}">
            <v-card>
                <v-img src="/images/home/mixed_cube.jpg" height="300px" contain></v-img>
                <v-card-title primary-title>
                    <div>
                        <div class="display-2 font-weight-thin mb-4">Rubiks cube tools</div>
                        <div class="body-1">
                            <p>
                                To solve the Rubik's cube blindfolded you need to learn who to memorize
                                letters quickly and in paris. Each sticker on the cube is assigned a letter,
                                and each possible letter pair has a word, AB can be remembered as ABBA.
                            </p>

                            <p>
                                The beginners method only requires 2 algorithms, one for edges and
                                one for corners. The M2-method is a lot faster but requires a few more
                                algorithms. The fastest method is know as 3-style but it has one
                                algorithm for eash letter pair, 440 for edges and 440 for corners.
                            </p>

                            <p>
                                The 3-style section on this page contains 2 cubers algorithms and
                                notes of the ones I have started learning. This section is under
                                construction and will grow as I learn more.
                            </p>

                            /Pontus Uggla
                        </div>
                    </div>
                </v-card-title>
            </v-card>
        </v-flex>
    </v-layout>
</template>