<template>
    <div>

        <div class="table-responsive mb-20">
            <table class="table table-bordered mb-10">
                <thead>
                    <tr>
                        <th>compétition</th>
                        <th>Saison</th>
                        <th>Match</th>
                        <th>Club1</th>
                        <th>Equipe1</th>
                        <th>Titularisation Equipe1</th>
                        <th>Club2</th>
                        <th>Equipe2</th>
                        <th>Titularisation Equipe2</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="item in elements" :key="item">
                        <th scope="row">{{ item.competition }}</th>
                        <td>{{ item.saison }}</td>
                        <td>{{ item.match }}</td>
                        <td>{{ item.club1 }}</td>
                        <td>{{ item.equipe1 }}</td>
                        <td>{{ item.titularisation_equipe1 }}</td>
                        <td>{{ item.club2 }}</td>
                        <td>{{ item.equipe2 }}</td>
                        <td>{{ item.titularisation_equipe2 }}</td>
                    </tr>
                    
                    
                </tbody>
            </table>
        </div>
        <form >
            
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group row">
                        <label for="libelle_en" class="col-md-2 col-form-label">Compétition</label>
                        <div class="col-md-10">
                            <select class="form-control" name="competition_id" id="competition_id" v-model="form.competition_id">
                                <option value="0" disabled="true" selected>Chosir une compétition</option>
                                <option v-for="competition in competitions" :key="competition.id" v-bind:value="competition.id" >{{competition.libelle}}</option>
                                
                            </select>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group row">
                        <label for="libelle_en" class="col-md-2 col-form-label">Saison</label>
                        <div class="col-md-10">
                            
                            <select class="form-control" name="saison_id" id="saison_id" v-model="form.saison_id" @change="getMatchBySaison">
                                <option value="0" disabled="true" selected>Chosir une saison</option>
                                <option v-for="saison in saisons" :key="saison.id" v-bind:value="saison.id" >{{saison.libelle}}</option>
                            </select>
                            
                        </div>
                    </div>

                </div>

                <div class="col-md-4">
                    <div class="form-group row">
                        <label for="match_id" class="col-md-2 col-form-label">Match</label>
                        <div class="col-md-10">
                            
                            <select class="form-control" name="match_id" id="match_id" v-model="form.match_id">
                                <option value="0" disabled="true" selected>Chosir une match</option>
                                <option v-for="match in matchs" :key="match.id" v-bind:value="match.id" >{{match.slug}}</option>
                                
                            </select>
                            
                        </div>
                    </div>

                </div>

            </div>
            <div class="row">
                
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="club1_id" class="col-md-2 col-form-label">Club 1</label>
                        <div class="col-md-10">
                            <select class="form-control" name="club1_id" id="club1_id" @change="getEquipe1" v-model="form.club1_id">
                                <option value="0" disabled="true" selected>Selectionnez un club</option>
                                <option v-for="club in clubs" :key="club.id" v-bind:value="club.club.id" >{{club.club.nom}}</option>
                                
                            </select>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="club2_id" class="col-md-2 col-form-label">Club 2</label>
                        <div class="col-md-10">
                            <select class="form-control" name="club2_id" id="club2_id" @change="getEquipe2" v-model="form.club2_id">
                                <option value="0" disabled="true" selected>Selectionnez un club</option>
                                <option v-for="club in clubs" :key="club.id" v-bind:value="club.club.id" >{{club.club.nom}}</option>
                                
                            </select>
                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="club1_id" class="col-md-2 col-form-label">Equipe 1</label>
                        <div class="col-md-10">
                            <select class="form-control" name="equipe1" id="equipe1" v-model="form.equipe1">
                                <option value="0" disabled="true" selected>Selectionnez les joueur</option>
                                <option v-for="equipe in equipes1" :key="equipe.id" v-bind:value="equipe.joueur.id" >{{equipe.joueur.nom}}({{equipe.poste.libelle}})</option>
                                
                            </select>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="club2_id" class="col-md-2 col-form-label">Equipe 2</label>
                        <div class="col-md-10">
                            <select class="form-control" name="equipe1" id="equipe2" v-model="form.equipe2">
                                <option value="0" disabled="true" selected>Selectionnez les joueur</option>
                                <option v-for="equipe in equipes2" :key="equipe.id" v-bind:value="equipe.joueur.id" >{{equipe.joueur.nom}}({{equipe.poste.libelle}})</option>
                                
                            </select>
                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="club1_id" class="col-md-2 col-form-label">Titularisation Equipe 1</label>
                        <div class="col-md-10">
                            <select class="form-control" name="equipe1" id="equipe1" v-model="form.titulaire_equipe1">
                                <option v-bind:value="'Oui'">Oui</option>
                                <option v-bind:value="'Non'">Non</option>
                            </select>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="club1_id" class="col-md-2 col-form-label">Titularisation Equipe 2</label>
                        <div class="col-md-10">
                            <select class="form-control" name="equipe1" id="equipe1" v-model="form.titulaire_equipe2">
                                <option v-bind:value="'Oui'">Oui</option>
                                <option v-bind:value="'Non'">Non</option>
                            </select>
                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="club1_id" class="col-md-2 col-form-label"></label>
                        <div class="col-md-10">
                            <button class="btn btn-primary btn-block waves-effect waves-light" @click.prevent="Ajouter">Ajouter au tableau</button>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    
                </div>
            </div>
            


            <div class="row">
                <div class="col-md-12">
                    <div class="form-group row">
                        <label for="libelle_en" class="col-md-2 col-form-label"></label>
                        <div class="col-md-3">
                            <button class="btn btn-success btn-block waves-effect waves-light" type="submit" @click.prevent="store">Sauvegarder</button>
                        </div>
                    </div>
                </div>
                
            </div>
            
        </form>
    </div>
</template>

<script setup>

import axios from 'axios';
import {onMounted ,reactive, ref} from 'vue';

let form=reactive({
    competition_id:'',
    saison_id:'',
    match_id:'',
    club1_id:'',
    club2_id:'',
    equipe1:'',
    equipe2:'',
    titulaire_equipe1:'',
    titulaire_equipe2:''
})

let competitions=ref({})
let saisons=ref({})
let matchs=ref({})
let clubs=ref({})
let elements=ref([])

let input=ref({competition: '', saison: '', match: '',club1:'',equipe1:'',titularisation_equipe1:'',club2:'',equipe2:'',titularisation_equipe2:''})

let equipes1=ref({})
let equipes2=ref({})

onMounted(async()=>{
    getCompetition(),
    getSaison() 
})
const Ajouter = async() =>{
    input.value={competition: form.competition_id, saison: form.saison_id, match: form.match_id,club1:form.club1_id,equipe1:form.equipe1,titularisation_equipe1:form.titulaire_equipe1,club2:form.club2_id,equipe2:form.equipe2,titularisation_equipe2:form.titulaire_equipe2}
    elements.value.push(input.value)
    //console.log('element',elements)
}

const store = async() =>{
    
    for (let i = 0; i < elements.value.length; i++){

         let data=new FormData;
            data.append('competition_id',elements.value[i].competition);
            data.append('saison_id',elements.value[i].saison);
            data.append('match_id',elements.value[i].match);
            data.append('club1_id',elements.value[i].club1);
            data.append('club2_id',elements.value[i].club2);
            data.append('equipe1',elements.value[i].equipe1);
            data.append('equipe2',elements.value[i].equipe2);
            data.append('titulaire_equipe1',elements.value[i].titularisation_equipe1);
            data.append('titulaire_equipe2',elements.value[i].titularisation_equipe2); 
            await axios.post("/api/feuilleMatch", data)
            .then(response=>{

                if (response.data == 'error') {
                    alert(response.data);
                }
                //console.log('reponse save',response.data)
                
            })
                
            .catch(error=>console.log(error))
    }

    alert('Enregistrer avec succès')
    
}


const getCompetition = async() =>{
    await axios.get("/api/competition")
    .then(response=>{
        //console.log(response.data)
        competitions.value=response.data
    })
    .catch(error=>console.log(error))
}

const getSaison = async() =>{
    await axios.get("/api/saison")
    .then(response=>{
        //console.log(response.data)
        saisons.value=response.data
    })
    .catch(error=>console.log(error))
}

const getMatchBySaison = async() =>{
    
    await axios.get("/api/match/" + form.competition_id +"/"+  form.saison_id)
    .then(response=>{
        //console.log(response.data)
        matchs.value=response.data
        getClubBySaison()
    })
    .catch(error=>console.log(error))
}

const getClubBySaison = async() =>{
    
    await axios.get("/api/club/" + form.competition_id +"/"+  form.saison_id)
    .then(response=>{
        //console.log(response.data)
        clubs.value=response.data
    })
    .catch(error=>console.log(error))
}

const getEquipe1 = async() =>{
    
    await axios.get("/api/joueur/" + form.club1_id )
    .then(response=>{
        //console.log(response.data)
        equipes1.value=response.data
    })
    .catch(error=>console.log(error))
}

const getEquipe2 = async() =>{
    
    await axios.get("/api/joueur/" + form.club2_id )
    .then(response=>{
        //console.log(response.data)
        equipes2.value=response.data
    })
    .catch(error=>console.log(error))
}


</script>