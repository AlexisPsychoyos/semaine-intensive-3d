using UnityEngine;
using System.Collections;

public class SwapTexture : MonoBehaviour {
	public Texture[] textures;
	public int currentTexture;
	// Use this for initialization
	void Start () {
	
	}
	
	// Update is called once per frame
	void Update () {
		if (Input.GetMouseButtonDown(0)){
			currentTexture++;
			currentTexture %= textures.Length;
			GetComponent<Renderer>().material.mainTexture = textures[currentTexture];
		}
	
	}
}
