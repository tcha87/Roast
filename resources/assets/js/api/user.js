import { ROAST_CONFIG } from '../config.js';

export default {

  getUser: function(){
    return axios.get( ROAST_CONFIG.API_URL + '/user' );
  },

  putUpdateUser: function( public_visibility, favorite_coffee, flavor_notes, city, state ){
    return axios.put( ROAST_CONFIG.API_URL + '/user',
      {
        public_visibility: public_visibility,
        favorite_coffee: favorite_coffee,
        flavor_notes: flavor_notes,
        city: city,
        state: state
      }
    );
  }
}
